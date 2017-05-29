<?php

namespace App\Http\Controllers\Admin;

use App\AgentPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAgentPurchasesRequest;
use App\Http\Requests\Admin\UpdateAgentPurchasesRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AgentPurchasesController extends Controller
{
    /**
     * Display a listing of AgentPurchase.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('agent_purchase_access')) {
            return abort(401);
        }
        if ($filterBy = Input::get('filter')) {
            if ($filterBy == 'all') {
                Session::put('AgentPurchase.filter', 'all');
            } elseif ($filterBy == 'my') {
                Session::put('AgentPurchase.filter', 'my');
            }
        }
        $agent_purchases = AgentPurchase::all();

        return view('admin.agent_purchases.index', compact('agent_purchases'));
    }

    /**
     * Show the form for creating new AgentPurchase.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('agent_purchase_create')) {
            return abort(401);
        }
        $relations = [
            'agents' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        return view('admin.agent_purchases.create', $relations);
    }

    /**
     * Store a newly created AgentPurchase in storage.
     *
     * @param  \App\Http\Requests\StoreAgentPurchasesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentPurchasesRequest $request)
    {
        if (! Gate::allows('agent_purchase_create')) {
            return abort(401);
        }
        $agent_purchase = AgentPurchase::create($request->all());



        return redirect()->route('admin.agent_purchases.index');
    }


    /**
     * Show the form for editing AgentPurchase.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('agent_purchase_edit')) {
            return abort(401);
        }
        $relations = [
            'agents' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        $agent_purchase = AgentPurchase::findOrFail($id);

        return view('admin.agent_purchases.edit', compact('agent_purchase') + $relations);
    }

    /**
     * Update AgentPurchase in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentPurchasesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentPurchasesRequest $request, $id)
    {
        if (! Gate::allows('agent_purchase_edit')) {
            return abort(401);
        }
        $agent_purchase = AgentPurchase::findOrFail($id);
        $agent_purchase->update($request->all());



        return redirect()->route('admin.agent_purchases.index');
    }


    /**
     * Display AgentPurchase.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('agent_purchase_view')) {
            return abort(401);
        }
        $relations = [
            'agents' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        $agent_purchase = AgentPurchase::findOrFail($id);

        return view('admin.agent_purchases.show', compact('agent_purchase') + $relations);
    }


    /**
     * Remove AgentPurchase from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('agent_purchase_delete')) {
            return abort(401);
        }
        $agent_purchase = AgentPurchase::findOrFail($id);
        $agent_purchase->delete();

        return redirect()->route('admin.agent_purchases.index');
    }

    /**
     * Delete all selected AgentPurchase at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('agent_purchase_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = AgentPurchase::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
