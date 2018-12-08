<section class="main-movie">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 mt-5">
              <div class="selec d-flex align-items-center">
                <button class="btn blue-gradient mr-auto" data-toggle="modal" data-target="#centralModal-lg" title="Thêm phim mới"><i class="fas fa-plus"></i></button>
                <div class="modal fade" id="centralModal-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                  <div class="modal-dialog modal-lg" role="form">
                    <form action="">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3>Thêm phim</h3>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" id="content-insert">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Tên phim</label>
                                  <input class="form-control" id="formGroupExampleInput" type="text" placeholder="Tên Phim">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Link SD</label>
                                  <input class="form-control" id="formGroupExampleInput" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Link HD</label>
                                  <input class="form-control" id="formGroupExampleInput" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Link FHD</label>
                                  <input class="form-control" id="formGroupExampleInput" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput">IMAGE</label>
                                  <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file">
                                  <div class="boximg mt-2"><img class="img-thumbnail" src="./img/imageFilm.png" alt=""></div>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea2">Mô tả ngắn</label>
                                  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"></textarea>
                                  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
                                  <label for="exampleFormControlTextarea2">Mô tả đầy đủ</label>
                                  <textarea class="form-control rounded-0" id="editor1" name="editor1"></textarea>
                                  <script>CKEDITOR.replace( 'editor1' )</script>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <select class="browser-default custom-select">
                                        <option selected="">Thể loại</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6">
                                      <select class="browser-default custom-select">
                                        <option selected="">Quốc Gia</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group d-flex">
                                  <div class="custom-control custom-radio mr-auto">
                                    <input class="custom-control-input" id="reslutionSD" type="radio" name="reslution" checked="">
                                    <label class="custom-control-label" for="reslutionSD">SD</label>
                                  </div>
                                  <!-- Group of default radios - option 2-->
                                  <div class="custom-control custom-radio mr-auto">
                                    <input class="custom-control-input" id="reslutionHD" type="radio" name="reslution">
                                    <label class="custom-control-label" for="reslutionHD">HD</label>
                                  </div>
                                  <!-- Group of default radios - option 3-->
                                  <div class="custom-control custom-radio mr-auto">
                                    <input class="custom-control-input" id="reslutionFHD" type="radio" name="reslution">
                                    <label class="custom-control-label" for="reslutionFHD">FHD</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                          <button class="btn btn-warning btn-sm" type="reset">Reset</button>
                          <button class="btn btn-primary btn-sm" type="button">Insert</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="form-group d-flex mb-0">
                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                  <div class="form-button ml-3 mr-3">
                    <button class="btn btn-small m-0 bg blue-gradient">Search</button>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <select class="browser-default custom-select">
                    <option selected="">Thể loại</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <button class="btn text-white font-weight-light blue-gradient ml-3">Sắp xếp theo thứ tự</button>
              </div>
            </div>
            <div class="col-12">
              <table class="table mt-2 table-striped bg-white font-weight-bold mb-0">
                <thead>
                  <tr>
                    <th scope="col">
                      <input type="checkbox">
                    </th>
                    <th scope="col">Mã</th>
                    <th scope="col">Tên phim</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">IBMS</th>
                    <th scope="col">Độ phân giải</th>
                    <th scope="col">View</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Thêm tập</th>
                    <th scope="col">Xóa</th>
                    <th scope="col">Sửa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">Nhật nguyệt thần kiêm</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">Hoàng hậu cuối cùng</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">Ngoài vòng pháp luật</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">Bi thương ngược dòng thành công</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">5</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">6</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">7</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">8</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">3</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">4</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">2</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">0</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="font-weight-light h6" scope="row">
                      <input type="checkbox">
                    </td>
                    <td class="font-weight-light h6">1</td>
                    <td class="font-weight-light h6">10</td>
                    <td class="font-weight-light h6">kinh dị</td>
                    <td class="font-weight-light h6">8.1</td>
                    <td class="font-weight-light h6">FHD </td>
                    <td class="font-weight-light h6"><a data-toggle="modal" data-target="#detailMovie-lg" title="Thêm phim mới" href="javascript.void()"><i class="far fa-eye"></i></a>
                      <div class="modal fade" id="detailMovie-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="content-insert">
                              <div class="card">
                                <div class="view overlay"><img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><a href="#!"></a>
                                  <div class="mask rgba-white-slight"></div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title">Vòng eo 56</h4>
                                  <p class="card-text"></p>Some quick example text to build on the card title and make up the bulk of the card's content.
                                  <ul class="list-unstyled d-flex mt-5">
                                    <li class="mr-auto">
                                      <div class="btn bg blue-gradient">18+</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Kinh Dị</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">Việt Nam</div>
                                    </li>
                                    <li class="mr-auto">
                                      <div class="btn blue-gradient">HD</div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><a data-toggle="modal" data-target="#EditImage" title="Thêm phim mới" href="javascript.void()"><i class="fas fa-edit"></i></a>
                      <div class="modal fade" id="EditImage" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog modal-md" role="form">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="list-Image"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"><img class="image-thumbnail m-2" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></div>
                              <div class="form-group">
                                <label for="formGroupExampleInput">IMAGE</label>
                                <input class="p-0 form-control fileCustom d-flex align-items-center" id="form-file" type="file" multiple>
                                <div class="boximg mt-2 d-flex f-wrap"><img class="image-thumbnail" src="./img/imageFilm.png" alt="">
                                  <div class="box-button">
                                    <button class="btn btn-sm blue-gradient">Insert Image</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> <a href="movie-series.html"><i class="fas fa-plus-square"></i></a></td>
                    <td> <a href="#"><i class="fas fa-trash-alt"> </i></a></td>
                    <td> <a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>
                </tbody>
              </table>
              <nav class="d-flex bg blue-gradient" aria-label="Page navigation example">
                <div class="mr-auto"></div>
                <ul class="pagination pagination-circle mb-0 mt-1">
                  <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                  <li class="page-item active"><a class="page-link">1</a></li>
                  <li class="page-item"><a class="page-link">2</a></li>
                  <li class="page-item"><a class="page-link">3</a></li>
                  <li class="page-item"><a class="page-link">4</a></li>
                  <li class="page-item"><a class="page-link">5</a></li>
                  <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>