@extends('layouts.master')
@section('css')
@endsection
@section('page')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Welcome Segun Ajayi!</h3>
                </div>
                <div class="card-body">
                    <div class="row mt-4 px-3">
                        <p>This is the staff home page of <b>{{ env('INSTITUTION_NAME') }}</b> EduPortal. You were assigned personal credentials (username and password) to access this page. Please note that all activities on this portal are being logged, and as such, all activities can be traced to specific officers of the Institution.</p>

                        <p>You are hereby advised not to reveal your login credentials to anybody. Anytime you feel your credentials have been compromised, you are free to change your password by clicking on <b>My Profile</b> link on the menu item.</p>

                    </div>
                    <div class="row mt-4 px-5">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>
{{--                                    My Role [--}}
{{--                                    @forelse($user->roles as $role)--}}
{{--                                        {{ Str::title($role->name) }}--}}
{{--                                    @empty--}}
{{--                                        No role as been assigned to you.--}}
{{--                                    @endforelse--}}
{{--                                    ]--}}
                                </h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="scroll_content">
                                    <p class="text-lg font-bold underline">My Permissions.</p>
                                    <ul class="list-group">
{{--                                        @forelse($user->getAllPermissions() as $perm)--}}
{{--                                            <li class="list-group-item">{{ Str::title('can ' . $perm->name) }}</li>--}}
{{--                                        @empty--}}
{{--                                            --}}{{--                                                    No permission as been assigned to you.--}}
{{--                                            You have been granted all permissions for demonstration purpose!--}}
{{--                                        @endforelse--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            // Add slimscroll to element
            $('.scroll_content').slimscroll({
                height: '200px'
            })
        });
    </script>
@endsection
