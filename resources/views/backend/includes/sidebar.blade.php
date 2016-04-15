          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="{!! access()->user()->picture !!}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                  <p>{{ access()->user()->name }}</p>
                  <!-- Status -->
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>

              <!-- search form (Optional) -->
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="{{ trans('strings.search_placeholder') }}"/>
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
              <!-- /.search form -->

              <!-- Sidebar Menu -->
              <ul class="sidebar-menu">
                <li class="header">{{ trans('menus.general') }}</li>

                <!-- Optionally, you can add icons to the links -->
                <li class="{{ Active::pattern('admin/dashboard') }}"><a href="{!!route('admin.dashboard')!!}"><span>{{ trans('menus.dashboard') }}</span></a></li>

                @permission('view-innovate-ecommerce')
                <li class="{{ Active::pattern('admin/tax*') }} treeview">
                  <a href="#">
                    <span>{{ trans('innovate.menus.ecommerce') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>


                  <ul class="treeview-menu {{ Active::pattern('admin/tax*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/tax*', 'display: block;') }}">
                      <!--  Sales -->
                      <li class="{{ Active::pattern('admin/eav*') }} treeview">
                          <a href="#">
                              <span>{{ trans('innovate.menus.sales') }}</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu {{ Active::pattern('admin/check_out_agreement*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/check_out_agreement*', 'display: block;') }}">
                              <li class="{{ Active::pattern('admin/bank_transfer_info') }}">
                                  <a href="{!! url('admin/bank_transfer_info') !!}">{{ trans('innovate.menus.product_attribute_category') }}</a>
                              </li>
                              <li class="{{ Active::pattern('admin/bank_transfer_info') }}">
                                  <a href="{!! url('admin/check_out_agreement') !!}">{{ trans('innovate.menus.product_attribute') }}</a>
                              </li>
                          </ul>
                      </li>
                      <!--  End Sales -->

                      <!--  Catalog -->
                      <li class="{{ Active::pattern('admin/eav*') }} treeview">
                          <a href="#">
                              <span>{{ trans('innovate.menus.catalog') }}</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu {{ Active::pattern('admin/catalog*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/check_out_agreement*', 'display: block;') }}">

                          <li class="{{ Active::pattern('admin/eav*') }} treeview">
                          <a href="#">
                              <span>{{ trans('innovate.menus.eav_product') }}</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu {{ Active::pattern('admin/eav/*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/check_out_agreement*', 'display: block;') }}">
                              <li class="{{ Active::pattern('admin/bank_transfer_info') }}">
                                  <a href="{!! url('admin/eav/category') !!}">{{ trans('innovate.menus.product_attribute_category') }}</a>
                              </li>
                              <li class="{{ Active::pattern('admin/eav/attribute') }}">
                                  <a href="{!! url('admin/eav/attribute') !!}">{{ trans('innovate.menus.product_attribute') }}</a>
                              </li>
                          </ul>
                      </li>
                      <li class="{{ Active::pattern('admin/category*') }} treeview">
                          <a href="#">
                              <span>{{ trans('innovate.menus.category') }}</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu {{ Active::pattern('admin/eav/*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/check_out_agreement*', 'display: block;') }}">
                              <li class="{{ Active::pattern('admin/bank_transfer_info') }}">
                                  <a href="{!! url('admin/category') !!}">{{ trans('innovate.menus.product_category') }}</a>
                              </li>

                          </ul>
                      </li>
                          </ul>
                   </li>
                      <!--  End Catalog -->
                        <li class="{{ Active::pattern('admin/tax') }}">
                          <a href="{!! url('admin/tax') !!}">{{ trans('innovate.menus.tax') }}</a>
                        </li>

                         <li class="{{ Active::pattern('admin/check_out_agreement*') }} treeview">
                          <a href="#">
                              <span>{{ trans('innovate.menus.static_pages') }}</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu {{ Active::pattern('admin/check_out_agreement*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/check_out_agreement*', 'display: block;') }}">
                              <li class="{{ Active::pattern('admin/bank_transfer_info') }}">
                                  <a href="{!! url('admin/bank_transfer_info') !!}">{{ trans('innovate.menus.bank_info') }}</a>
                              </li>
                              <li class="{{ Active::pattern('admin/bank_transfer_info') }}">
                                  <a href="{!! url('admin/check_out_agreement') !!}">{{ trans('innovate.menus.check_out_agreement') }}</a>
                              </li>
                          </ul>
                         </li>

                  </ul>
                </li>
                @endauth
                @permission('view-access-management')
                  <li class="{{ Active::pattern('admin/access/*') }}"><a href="{!!url('admin/access/users')!!}"><span>{{ trans('menus.access_management') }}</span></a></li>
                @endauth

                 <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                  <a href="#">
                    <span>{{ trans('menus.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/log-viewer') }}">
                      <a href="{!! url('admin/log-viewer') !!}">{{ trans('menus.log-viewer.dashboard') }}</a>
                    </li>
                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                      <a href="{!! url('admin/log-viewer/logs') !!}">{{ trans('menus.log-viewer.logs') }}</a>
                    </li>
                  </ul>
                </li>

              </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
          </aside>
