<!DOCTYPE html>
<html>

@include('layouts.head')

<body class="">

<div id="wrapper">

    @include('layouts.admin-side-menu')

    <div id="page-wrapper" x-cloak class="gray-bg">
        @include('layouts.header')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-8">
                <h2 class="text-gray-800 text-2xl mt-3 mb-1 text-medium font-light tracking-wide">@yield('page')</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    @yield('breadcrumb')
                </ol>
            </div>
            <div class="col-sm-4">
                <div class="title-action">
                    @yield('action')
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">

            @yield('content')

        </div>
        <div class="footer">
            <div class="float-right">
                Powered by <strong>{{ \Illuminate\Support\Facades\Session::get('institution.short_name') }} ICT</strong>
            </div>
            <div>
                <strong>Copyright</strong> {{ \Illuminate\Support\Facades\Session::get('institution.name') }} &copy; 2021{{ \Carbon\Carbon::now()->format('Y') != 2021 ? ' - ' . \Carbon\Carbon::now()->format('Y') : '' }}
            </div>
        </div>

    </div>
</div>
<div class="modal inmodal" id="changePassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Change Password!</h4>
                <small class="font-bold">Password change required!</small>
            </div>
            <div class="modal-body">
                <p>You have been successfully logged in.</p>
                <p>However, you will need to change your password before you can continue.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Change Password</button>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer-scripts')

</body>

</html>
