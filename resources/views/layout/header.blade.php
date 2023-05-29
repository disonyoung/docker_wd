<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">WD后台管理系统</a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>管理员<i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">个人资料</a>
                            </li>
                            <li class="divider"></li>
                            <li>
{{--                                <a tabindex="-1" href="login.html">退出</a>--}}
                                <a tabindex="-1" href="javascript:;" onclick="document.getElementById('logout').submit()">退出</a>
                                <form id="logout" method="post" action="{{ route('logout') }}" hidden>
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="active">
                        <a href="#">首页</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">设置 <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
{{--                                <a href="#">工具 <i class="icon-arrow-right"></i>--}}
                                <a href="#">中介</i>

                                </a>
{{--                                <ul class="dropdown-menu sub-menu">--}}
{{--                                    <li>--}}
{{--                                        <a href="#">报表</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">日志</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">错误</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </li>
                            <li>
                                <a href="#">中心</a>
                            </li>
                            <li>
                                <a href="{{ route('item.index') }}">项目</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('xieyi.index') }}">协议</a>
                                <a href="#">通讯录</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="#">其他链接</a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">内容 <i class="caret"></i>--}}

{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">博客</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">新闻</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">定制页面</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">日历</a>--}}
{{--                            </li>--}}
{{--                            <li class="divider"></li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">答疑</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">用户 <i class="caret"></i>--}}

{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">用户列表</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">搜索</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="#">权限</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
