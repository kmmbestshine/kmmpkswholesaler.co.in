@extends('layouts.main')




<div class="col-md-12">
    <div class="card card-primary">
        

    <!-- /.card-header -->
    <div class="card-body">
        <div id="product_table_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12">
                    <table id="product_table" class="table table-bordered table-striped table-hover  dataTable"
                        role="grid" aria-describedby="product_table_info">
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Priority</th>
                            <th>Location</th>
                            <th>Date</th>
                        </tr>
                        </tfoot>
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Priority</th>
                            <th>Location</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>

                          
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->


</div>


