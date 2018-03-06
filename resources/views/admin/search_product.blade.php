<table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> ID</th>
                    <th><i class="icon_calendar"></i> Name</th>
                    <th><i class="icon_mail_alt"></i> Category</th>
                    <th><i class="icon_pin_alt"></i> Price</th>
                    <th><i class="icon_pin_alt"></i> Introduce</th>
                    <th><i class="icon_pin_alt"></i> Description</th>
                    <th><i class="icon_pin_alt"></i> Image</th>
                    <th><i class="icon_pin_alt"></i> View</th>
                    <th><i class="icon_pin_alt"></i> date</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  @foreach($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                    <?php
                      $cate = DB::table('categories')->where('id',$product->cate_id)->first();
                      echo $cate->name;
                    ?>
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->intro }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img src="{{ asset('/public/img/') }}/{{ $product->image }}" width="150px" /> </td>
                    <td>{{ $product->view }}</td>
                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans()}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" onclick="return check_delete()" href="{{ route('admin.products.delete',$product->id) }}"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>