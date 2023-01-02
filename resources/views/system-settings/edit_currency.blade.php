@extends('layouts.hmsmain')
@section('content')

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Currency</b></h4>
    <br><br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_currency')}}" id="form">
                <input type="hidden" name="id" value="{{$currency_list->id}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Currency Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="currency" value="{{$currency_list->currency_name}}"
                                    class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Currency Symbol:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="csymbol" value="{{$currency_list->currency_symbol}}"
                                    class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Exchange Rate:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" id="" name="exchangerate" value="{{$currency_list->exchange_rate}}"
                                    class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Default Account:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="account" style="width:100%;">
                                    <option>{{$currency_list->default_action}}</option>
                                    <option>8000====Client Account- Cooperative Bank</option>
                                    <option>8003====Client Account- DTB Bank</option>
                                    <option>8004====Client Account- Sidian Bank</option>
                                    <option>8006====Client Account- Equity Bank</option>
                                    <option>8008====Client Account- Coperative Bank (USD)</option>
                                    <option>8009====Client Account- PayPal</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                        <br>
                        <br>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection