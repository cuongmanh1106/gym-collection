<table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i class="icon_profile"></i> ID</th>
                      <th><i class="icon_calendar"></i> Name</th>
                      <th><i class="icon_mail_alt"></i> Parent</th>
                      <th><i class="icon_pin_alt"></i> Description</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                    @foreach($cates as $cate)
                    <?php 
                      $count = count(DB::table('products')->where('cate_id',$cate->id)->get());
                    ?>
                    <tr>
                      <td>{{ $cate->id }}</td>
                      <!-- <td><a href="#">{{$cate->name}}</a></td> -->
                      <td>
                       @if($count != 0)
                        <a href="{{ route('admin.categories.product',$cate->id) }}">{{$cate->name}}</a>
                        @else
                          {{$cate->name}}
                       @endif
                      </td>
                      <td>
                        @if($cate->parent_id == 0)
                          {{"None"}}
                        @else
                          <?php
                            $parent = DB::table('categories')->where('id',$cate->parent_id)->first();
                            echo $parent->name;
                          ?>
                        @endif

                      </td>
                      <td>{{ $cate->description }}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="{{ route('admin.categories.edit',$cate->id) }}"><i class="icon_plus_alt2"></i></a>
                          <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                          <a class="btn btn-danger" onclick="return check_delete()" href="{{ route('admin.categories.delete',$cate->id) }}"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>