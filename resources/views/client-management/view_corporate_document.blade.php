<style>
.btn-width {
    width: 10%;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">

    <div class="invoice-company text-inverse f-w-600">
        <span class="pull-right hidden-print">

            <button><a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"
                    id="hidethat"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a></button>
        </span>
    </div>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">


            <tbody>

                <tr>
                    <div>
                        <img src="{{asset('/images/file/'.$view_document->file)}}" width="100%" height="auto"
                            alt="image">
                    </div>
                </tr>

            </tbody>
        </table>
    </div>
</div>