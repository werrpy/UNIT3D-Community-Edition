@extends('layout.default')

@section('breadcrumb')
    <li class="active">
        <a href="{{ route('create', ['receiver_id' => '', 'username' => '']) }}">
            <span itemprop="title" class="l-breadcrumb-item-link-title">
                @lang('pm.send') @lang('pm.message')
            </span>
        </a>
    </li>
@endsection

@section('content')
    <div class="container">
        <div class="header gradient silver">
            <div class="inner_content">
                <h1>@lang('pm.private') @lang('pm.message') - @lang('pm.create')</h1>
            </div>
        </div>
        <div class="row">
            @include('partials.pmmenu')
            <div class="col-md-10">
                <div class="block">
                    <form role="form" method="POST" action="{{ route('send-pm') }}">
                        @csrf
                        <div class="form-group">
                            <label for="receiver_id">@lang('common.username')</label>
                            <input id="receiver_id" name="receiver_id" class="form-control" placeholder="@lang('common.username')" {{request()->has('username') ? 'readonly' : 'required'}} value="{{request()->has('username') ? request()->get('username') : '' }}">
                        </div>
    
                        <div class="form-group">
                            <label for="pm-subject">@lang('pm.subject')</label>
                            <input id="pm-subject" name="subject" class="form-control" placeholder="@lang('pm.enter-subject')" required>
                        </div>
    
                        <div class="form-group">
                            <label for="message">@lang('pm.message')</label>
                            <textarea id="message" name="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
    
                        <button class="btn btn-primary">
                            <i class="{{ config('other.font-awesome') }} fa-save"></i> @lang('pm.send')
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script nonce="{{ Bepsvpt\SecureHeaders\SecureHeaders::nonce('script') }}">
        $(document).ready(function() {
            $('#message').wysibb({});
        })
    
    </script>
@endsection
