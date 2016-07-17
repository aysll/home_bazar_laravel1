@extends('adminlayout')

@section('content')

<!-- BEGIN CONTENT -->
             <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Add Product

                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">

                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>THEME</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light active" data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Theme Style
                                                    <select class="layout-style-option form-control input-small input-sm">
                                                        <option value="square">Square corners</option>
                                                        <option value="rounded" selected="selected">Rounded corners</option>
                                                    </select>
                                                </li>
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">


                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN BUTTONS PORTLET-->
                                                  <div class="portlet light bordered">


                                <div class="portlet-body">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/addProduct" >
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="row">
  <div class="col-md-6">
      <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">ProductName</label>
    <div class="col-sm-9">
      <input  class="form-control" id="inputEmail3" name="ProductName" >
    </div>

  </div>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <textarea style="height:100px;" name="ProductDescription" id="" cols="30" rows="10" class="form-control" name="ProductDescription"></textarea>
    </div>

  </div>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>
    <div class="col-sm-9">
        <select class="bs-select form-control" data-live-search="true" data-size="8" name="CategoryName">
          @foreach($categories as $category)
                <option value="{{ $category->CategoryName }}">{!! $category->CategoryName  !!}</option>
          @endforeach
        </select>
    </div>

  </div>

  <!-- <div class="form-group">
   <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>
   <div class="col-sm-9">
     <input  class="form-control" name="categoryName" >
   </div>

 </div> -->

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">UnitPrice</label>
    <div class="col-sm-9">
      <input  class="form-control" name="UnitPrice">
    </div>

  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Available Size</label>
    <div class="col-sm-9">
      <input  class="form-control" name="AvailableSize" >
    </div>

  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Available Color</label>
    <div class="col-sm-9">
      <input  class="form-control" name="AvailableColor"  >
    </div>

  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Size</label>
    <div class="col-sm-9">
      <input  class="form-control" id="inputEmail3" name="Size" >
    </div>

  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Color</label>
    <div class="col-sm-9">
      <input  class="form-control" id="inputEmail3" name="Color">
    </div>



  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Discount</label>
    <div class="col-sm-9">
      <input  class="form-control" id="inputEmail3" name="Discount">
    </div>



  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">UnitWeight</label>
    <div class="col-sm-9">
      <input  class="form-control" id="inputEmail3" name="UnitWeight">
    </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-3 control-label">WeightType</label>
  <div class="col-sm-4">
    <input  class="form-control" id="inputEmail3" name="WeightType">
  </div>
</div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">UnitInStock</label>
    <div class="col-sm-9">
      <input  class="form-control" id="inputEmail3" name="UnitInStock" >
    </div>
</div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">UnitInOrder</label>
    <div class="col-sm-9">
      <input  class="form-control" id="inputEmail3" name="UnitInOrder">
    </div>



  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label"></label>
    <div class="col-sm-9">
      <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
        <div>
            <span class="btn red btn-outline btn-file">
                <span class="fileinput-new"> Select image </span>
                <span class="fileinput-exists"> Change </span>
                <input type="file" name="Picture">
            </span>
      <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
        </div>
      </div>
      <hr>
          {{-- <h3>More Pictures</h3>
          <button class="btn btn-primary add_images" type="button"><i class="glyphicon glyphicon-plus"></i></button>
          <hr>

<script type="text/javascript">
  $(document).ready(function(){
      $('.add_images').click(function()
          {
              all=$('input[name="Picture"]');
              if(all.length==11) return; 
              field=$('input[name="Picture"]:first').clone();
              $(this).after(field);
          })
  });
</script> --}}
     </div>
    </div>

  </div>


  </div>

  <div class="row">
  <div class="col-md-9"></div>
     <div class="col-md-3">
    <button type="submit" class="btn green ">Add</button>
    <button type="button" class="btn default ">Cancel</button>
    </div>
  </div>
</form>


  </div>
</div>
 <!-- end here -->
                                </div>
                            </div>


                                                <!-- BEGIN BLOCK BUTTONS PORTLET-->

                                                <!-- END BLOCK BUTTONS PORTLET-->
                                                <!-- BEGIN BLOCK BUTTONS PORTLET-->

                                                <!-- END BLOCK BUTTONS PORTLET-->
                                                <!-- BEGIN BLOCK BUTTONS PORTLET-->

                                                <!-- END BLOCK BUTTONS PORTLET-->
                                                <!-- BEGIN BLOCK BUTTONS PORTLET-->

                                                <!-- END BLOCK BUTTONS PORTLET-->
                                            </div>

                                                <!-- BEGIN BLOCK BUTTONS PORTLET-->

                                                <!-- END BLOCK BUTTONS PORTLET-->
                                                <!-- BEGIN DROPDOWNS PORTLET-->

                                                <!-- END DROPDOWNS PORTLET-->
                                                <!-- BEGIN DROPDOWNS PORTLET-->


                                            </div>
                                        </div>
                                    </div>



                                </div>

                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
@endsection

