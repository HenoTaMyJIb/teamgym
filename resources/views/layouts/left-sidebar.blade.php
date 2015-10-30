<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="@if(Route::getCurrentRoute()->getPath() === 'gymnasts') active @endif"><a href="{{ url('gymnasts') }}"><i class="fa fa-users"></i>{{ trans('global.gymnasts') }}</a></li>
            <li class="@if(Route::getCurrentRoute()->getPath() === 'competitions') active @endif"><a href="{{ url('competitions') }}"><i class="fa fa-bell-o"></i>Competitions</a></li>
            <li class="treeview @if(Route::getCurrentRoute()->getParameter('age')) active @endif">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Elements</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @foreach($ageGroupsMenu as $ageGroup)
                        <li class="@if(Route::getCurrentRoute()->getParameter('age') === $ageGroup->slug) active @endif">
                            <a href="#"><i class="fa fa-circle-o"></i> {{ $ageGroup->name }} <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu @if(Route::getCurrentRoute()->getParameter('age') === $ageGroup->slug) menu-open @endif">
                                @foreach($disciplinesMenu as $discipline)
                                @if($discipline->code !== 'floor')
                                    <li class="@if(Route::getCurrentRoute()->getActionName() === 'App\Http\Controllers\ElementsController@'.$discipline->code) active @endif">
                                        <a href="{{ url('elements/'. $discipline->code . '/' . $ageGroup->slug) }}"><i class="fa fa-chevron-circle-right"></i>{{ $discipline->name }}</a>
                                    </li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Administation</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-user"></i>Users</a></li>
                    <li><a href="{{ url('/clubs') }}"><i class="fa fa-sitemap"></i>Clubs</a></li>
                    <li><a href="#"><i class="fa fa-group"></i>Coaches</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i>Classifiers</a></li>
                    <li><a href="#"><i class="fa fa-clock-o"></i>History</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>