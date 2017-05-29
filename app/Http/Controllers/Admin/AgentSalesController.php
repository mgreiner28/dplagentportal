<?php

namespace App\Http\Controllers\Admin;

use App\AgentSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAgentSalesRequest;
use App\Http\Requests\Admin\UpdateAgentSalesRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AgentSalesController extends Controller
{
    /**
     * Display a listing of AgentSale.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('agent_sale_access')) {
            return abort(401);
        }
        if ($filterBy = Input::get('filter')) {
            if ($filterBy == 'all') {
                Session::put('AgentSale.filter', 'all');
            } elseif ($filterBy == 'my') {
                Session::put('AgentSale.filter', 'my');
            }
        }
        $agent_sales = AgentSale::all();

        return view('admin.agent_sales.index', compact('agent_sales'));
    }

    /**
     * Show the form for creating new AgentSale.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('agent_sale_create')) {
            return abort(401);
        }
        $relations = [
            'agents' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        return view('admin.agent_sales.create', $relations);
    }

    /**
     * Store a newly created AgentSale in storage.
     *
     * @param  \App\Http\Requests\StoreAgentSalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentSalesRequest $request)
    {
        if (! Gate::allows('agent_sale_create')) {
            return abort(401);
        }
        $agent_sale = AgentSale::create($request->all());



        return redirect()->route('admin.agent_sales.index');
    }


    /**
     * Show the form for editing AgentSale.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('agent_sale_edit')) {
            return abort(401);
        }
        $relations = [
            'agents' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        $agent_sale = AgentSale::findOrFail($id);

        return view('admin.agent_sales.edit', compact('agent_sale') + $relations);
    }

    /**
     * Update AgentSale in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentSalesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentSalesRequest $request, $id)
    {
        if (! Gate::allows('agent_sale_edit')) {
            return abort(401);
        }
        $agent_sale = AgentSale::findOrFail($id);
        $agent_sale->update($request->all());



        return redirect()->route('admin.agent_sales.index');
    }


    /**
     * Display AgentSale.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('agent_sale_view')) {
            return abort(401);
        }
        $relations = [
            'agents' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        $agent_sale = AgentSale::findOrFail($id);

        return view('admin.agent_sales.show', compact('agent_sale') + $relations);
    }


    /**
     * Remove AgentSale from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('agent_sale_delete')) {
            return abort(401);
        }
        $agent_sale = AgentSale::findOrFail($id);
        $agent_sale->delete();

        return redirect()->route('admin.agent_sales.index');
    }

    /**
     * Delete all selected AgentSale at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('agent_sale_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = AgentSale::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
