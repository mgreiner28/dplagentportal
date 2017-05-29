@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('internal_notification_access')
            <li class="{{ $request->segment(2) == 'internal_notifications' ? 'active' : '' }}">
                <a href="{{ route('admin.internal_notifications.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">@lang('quickadmin.internal-notifications.title')</span>
                </a>
            </li>
            @endcan
            
            @can('deal_access')
            <li class="">
                <a href="#">
                    <i class="fa fa-folder-open"></i>
                    <span class="title">@lang('quickadmin.deals.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                
                @can('agent_sale_access')
                <li class="{{ $request->segment(2) == 'agent_sales' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.agent_sales.index') }}">
                            <i class="fa fa-files-o"></i>
                            <span class="title">
                                @lang('quickadmin.agent-sales.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('agent_purchase_access')
                <li class="{{ $request->segment(2) == 'agent_purchases' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.agent_purchases.index') }}">
                            <i class="fa fa-files-o"></i>
                            <span class="title">
                                @lang('quickadmin.agent-purchases.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            

            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ route('admin.messenger.index') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
