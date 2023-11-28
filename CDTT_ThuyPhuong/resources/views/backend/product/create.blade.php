@extends('layouts.admin')
@section('title','Quản lý sản phẩm')
@section('content')
      <!-- CONTENT -->
      <form action="{{route('product.create')}}" enctype="multipart/form-data" method="POST">
         @csrf
         @method('POST')
         <div class="content-wrapper">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-12">
                        <h1 class="d-inline">Thêm mới sản phẩm</h1>
                     </div>
                  </div>
               </div>
            </section>
            <section class="content">
               <div class="card">
                  <div class="card-header text-right">
                     <a href="product_index.html" class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Về danh sách
                     </a>
                     <button type="submit" class="btn btn-sm btn-success" name="THEM">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Thêm sản phẩm
                     </button>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="mb-3">
                              <label>Tên sản phẩm (*)</label>
                              <input type="text" placeholder="Nhập tên sản phẩm" name="name" class="form-control">
                           </div>
                           <div class="mb-3">
                              <label>Slug</label>
                              <input type="text" placeholder="Nhập slug" name="slug" class="form-control">
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label>Danh mục (*)</label>
                                    <select name="category_id" class="form-control">
                                       <option value="">Chọn danh mục</option>
                                       {{!!$html_category_id!!}}
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label>Thương hiệu (*)</label>
                                    <select name="brand_id" class="form-control">
                                       <option value="">Chọn thương hiệu</option>
                                       {{!!$html_brand_id!!}}
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-3">
                              <label>Chi tiết (*)</label>
                              <textarea name="detail" placeholder="Nhập chi tiết sản phẩm" rows="5"
                                 class="form-control"></textarea>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="mb-3">
                              <label>Giá bán (*)</label>
                              <input type="number" value="10000" min="10000" name="price" class="form-control">
                           </div>
                           <div class="mb-3">
                              <label>Hình đại diện</label>
                              <input type="file" name="image" class="form-control">
                           </div>
                           <div class="mb-3">
                              <label>Trạng thái</label>
                              <select name="status" class="form-control">
                                 <option value="1">Xuất bản</option>
                                 <option value="2">Chưa xuất bản</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </form>
      <!-- END CONTENT-->
@endsection