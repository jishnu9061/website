@extends('layouts.hmsmain')
@section('content')
    
        <div class="container">
            <div class="row align-items-start">
              <div class="col">
                <div class="mb-3" >
                    <label class="form-label">Item No</label>
                    <input type="text" class="form-control">
                    </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" class="form-control">
                    </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Delivery Date</label>
                    <input type="date" class="form-control">
                    </div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Supplier</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>---select---</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control"  rows="3"></textarea>
                  </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Delivery Date</label>
                    <input type="text" class="form-control">
                    </div>
              </div>
            </div>
            <div class="row align-items-end">
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="text" class="form-control">
                    </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Approver</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>---select---</option>
                        <option value="1">one</option>
                        <option value="2">two</option>
                      </select>
                    </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>---select---</option>
                        <option value="1">Approved</option>
                        <option value="2">Declined</option>
                      </select>
                    </div>
              </div>
            </div>
            <br>

           <!-- button -->

           <button type="button" class="btn btn-primary">Save</button>
           <button type="button" class="btn btn-secondary">Cancel</button>

          </div>

    
    
    
    
          @endsection