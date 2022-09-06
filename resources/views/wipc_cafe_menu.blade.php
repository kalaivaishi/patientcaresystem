@include('layouts.master')
@section('title','Awaiting Request')

        <!--Main Content-->
<div class="page-wrapper">
    <div class="content">
<!-- Main Dashboard -->
    <div class="row">
        <div class="col-12">
            <div class="card">
    <div class="card-box mb-0">
        <h6 class="card-title text-bold"> Cafe Menu </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_cafe_menu')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                                
                                <div class="col-md-4 ">
                                    <label> Date </label>
                                    <input type="date" class="form-control" name="date" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Juice 1</label>
                                    <input type="text" class="form-control" name="juice1" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Juice 2</label>
                                    <input type="text" class="form-control" name="juice2" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Juice 3</label>
                                    <input type="text" class="form-control" name="juice3" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Juice 4</label>
                                    <input type="text" class="form-control" name="juice4">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Meal Type_1</label>
                                    <input type="text" class="form-control" name="meal_type1">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Meal Type_2</label>
                                    <input type="text" class="form-control" name="meal_type2">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Meal Type_3</label>
                                    <input type="text" class="form-control" name="meal_type3">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Meal Type_4</label>
                                    <input type="text" class="form-control" name="meal_type4">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Snack_1</label>
                                    <input type="text" class="form-control" name="snack1" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Snack_2</label>
                                    <input type="text" class="form-control" name="snack2" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Snack_3</label>
                                    <input type="text" class="form-control" name="snack3">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Snack_4</label>
                                    <input type="text" class="form-control" name="snack4">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Cake_1</label>
                                    <input type="text" class="form-control" name="cake1">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Cake_2</label>
                                    <input type="text" class="form-control" name="cake2">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Cake_3</label>
                                    <input type="text" class="form-control" name="cake3">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Cake_4</label>
                                    <input type="text" class="form-control" name="cake4">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Week Day</label>
                                    <input type="text" class="form-control" name="week_day">
                                </div>
                                
                                
                            </div>
                            <div class="col-lg-4 ">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
 
            </div>
<!--/ content -->
        </div>
    </div>
</div>
</div>
