<div class="container">
<div class="box">
    <h2>{{ __('Lazada Seller Authorized!') }}</h2>
    @if($seller->accessToken)
    <p>{{ __('Access token has been generated. You may now proceed to call any supported Lazada API using this SDK.') }}</p>
    @endif
    <ul>
        <li><strong>{{ __('Authorization code') }}</strong>: {{ $code }}</li>
        @if($seller)
            @if($seller->name)
                <li><strong>{{ __('Seller name') }}</strong>: {{ $seller->name }}</li>
            @endif
            <li><strong>{{ __('Seller ID') }}</strong>: {{ $seller->id }}</li>
            <li><strong>{{ __('Seller short code') }}</strong>: {{ $seller->short_code }}</li>
            @if($seller->accessToken)
                <li><strong>{{ __('Access token') }}</strong>: {{ $seller->accessToken->access_token }} </li>
                <li><strong>{{ __('Access token expires at') }}</strong>: {{ $seller->accessToken->expires_at?->toDateTimeString() }} </li>
                <li><strong>{{ __('Refresh Token') }}</strong>: {{ $seller->accessToken->refresh_token }}</li>
                <li><strong>{{ __('Refresh token expires at') }}</strong>: {{ $seller->accessToken->refresh_expires_at?->toDateTimeString() }} </li>
            @endif
        @endif
    </ul>

</div>
</div>

<style>
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    padding-top: 20px;
    font-family: "Trebuchet MS", Helvetica, Verdana, sans-serif;
}
.box {
    border: #cccccc 1px solid;
    padding: 30px 20px;
    border-radius: 15px;
    width: 700px;
    max-width: 100%;
}

h2 {
    margin: 0;
    margin-bottom: 10px;
}

ul{
    margin: 0;
    padding: 0;
}

ul > li {
    list-style-type: none;
    line-height: 1.5;
}
</style>
