<aside>
    @auth
        <div class="box" id="my_account">
            <div class="ui primary attached message">
                <h1 class="header">@lang('trans/title.my_account')</h1>
            </div>
            <div class="ui attached fluid segment">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="ui red fluid mini basic button" type="submit"><i class="sign out icon"></i>@lang('trans/aside.my_account.logout')</button>
                </form>
            </div>
        </div>
    @endauth
    <div class="box">
        <div class="ui primary attached message">
            <h1 class="header">@lang('trans/title.server_info')</h1>
        </div>
        <div class="ui attached fluid segment">
            <table class="ui very basic compact table">
                <tbody>
                    <tr>
                        <td>@lang('trans/aside.server_status.status')</td>
                        <td class="right aligned">{{ $serverStatus->status }}</td>
                    </tr>
                    <tr>
                        <td>@lang('trans/aside.server_status.accounts_number')</td>
                        <td class="right aligned">{{ $serverStatus->accounts_number }}</td>
                    </tr>
                    <tr>
                        <td>@lang('trans/aside.server_status.players_number')</td>
                        <td class="right aligned">{{ $serverStatus->players_number }}</td>
                    </tr>
                    <tr>
                        <td>@lang('trans/aside.server_status.connected_number')</td>
                        <td class="right aligned">{{ $serverStatus->connected_number }}</td>
                    </tr>
                    <tr>
                        <td>@lang('trans/aside.server_status.max_connected_number')</td>
                        <td class="right aligned">{{ $serverStatus->max_connected_number }}</td>
                    </tr>
                    <tr>
                        <td>@lang('trans/aside.server_status.exp_rate')</td>
                        <td class="right aligned">{{ $serverStatus->exp_rate }}</td>
                    </tr>
                    <tr>
                        <td>@lang('trans/aside.server_status.drop_rate')</td>
                        <td class="right aligned">{{ $serverStatus->drop_rate }}</td>
                    </tr>
                    <tr>
                        <td>@lang('trans/aside.server_status.penyas_rate')</td>
                        <td class="right aligned">{{ $serverStatus->penyas_rate }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="box">
        <div class="ui primary attached message">
            <h1 class="header">@lang('trans/title.hall_of_fame')</h1>
        </div>
        <div class="ui attached fluid segment">
            <div class="ui middle aligned list">
                <div class="item">
                    <img class="ui image" src="{{ asset('img/MVP.png') }}" title="@lang('trans/aside.hall_of_fame.mvp')">
                    <div class="middle aligned content">{{ $serverStatus->mvp_info }}</div>
                </div>
                <div class="item">
                    <img class="ui image" src="{{ asset('img/GS.png') }}" title="@lang('trans/aside.hall_of_fame.gs')">
                    <div class="middle aligned content">{{ $serverStatus->gs_info }}</div>
                </div>
                <div class="item">
                    <img class="ui image" src="{{ asset('img/souv.png') }}" title="@lang('trans/aside.hall_of_fame.souv')">
                    <div class="middle aligned content">{{ $serverStatus->lord_info }}</div>
                </div>
                <div class="item">
                    @if($serverStatus->event_info)
                        <img class="ui image popup_element" src="{{ asset('img/event.png') }}" title="@lang('trans/aside.hall_of_fame.event')" data-html="{!! nl2br($serverStatus->event_info->details) !!}">
                        <div class="middle aligned content">{{ $serverStatus->event_info->message }}</div>
                    @else
                        <img class="ui image" src="{{ asset('img/event.png') }}" title="@lang('trans/aside.hall_of_fame.event')">
                        <div class="middle aligned content">@lang('trans/aside.hall_of_fame.no_event_currently')</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</aside>

<?php /** @var \App\Helper\ServerStatus $serverStatus */ ?>