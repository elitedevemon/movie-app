@extends('admin.layouts.master')
@section('content')
  <!-- BEGIN row -->
  <div class="row g-2">
    <!-- BEGIN col-12 -->
    <div class="col-xl-12">
      <!-- BEGIN row -->
      <div class="row g-2">
        <!-- BEGIN col-2 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header">MONTHLY PAGE VIEWS</div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <div class="h4 fw-100 text-theme mb-1">12,543</div>
              <p class="fs-10px mb-0 text-white">
                +8.5% vs last month
              </p>
              <p class="fs-9px mb-0 text-white text-opacity-50">
                updated 1 min ago
              </p>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-2 -->

        <!-- BEGIN col-2 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header">MONTHLY AVG PAGE VIEWS</div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <div class="h4 fw-100 text-theme mb-1">02:34</div>
              <p class="fs-10px mb-0 text-white">
                +12.3% vs last quarter
              </p>
              <p class="fs-9px mb-0 text-white text-opacity-50">
                updated 1 min ago
              </p>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-2 -->

        <!-- BEGIN col-2 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header">DAILY PAGE VIEWS</div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <div class="h4 fw-100 text-theme mb-1">45.2%</div>
              <p class="fs-10px mb-0 text-white">
                -3.2% vs last week
              </p>
              <p class="fs-9px mb-0 text-white text-opacity-50">
                updated 1 min ago
              </p>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-2 -->

        <!-- BEGIN col-2 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header">DAILY TOTAL VISITORS</div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <div class="h4 fw-100 text-theme mb-1">32.6%</div>
              <p class="fs-10px mb-0 text-white">
                -0.5% vs last month
              </p>
              <p class="fs-9px mb-0 text-white text-opacity-50">
                updated 1 min ago
              </p>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-2 -->

        <!-- BEGIN col-2 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header">MONTHLY TOTAL VISITORS</div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <div class="h4 fw-100 text-theme mb-1">Google</div>
              <p class="fs-10px mb-0 text-white">
                2 new referrals added
              </p>
              <p class="fs-9px mb-0 text-white text-opacity-50">
                updated 1 min ago
              </p>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-2 -->

        <!-- BEGIN col-2 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header">MONTHLY AVG VISITORS</div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <div class="h4 fw-100 text-theme mb-1">87</div>
              <p class="fs-10px mb-0 text-white">
                +5 countries vs last year
              </p>
              <p class="fs-9px mb-0 text-white text-opacity-50">
                updated 1 min ago
              </p>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-2 -->
      </div>
      <!-- END row -->
    </div>
    <!-- END col-12 -->

    <!-- BEGIN col-8 -->
    <div class="col-xl-8">
      <!-- BEGIN card -->
      <div class="card h-100">
        <!-- BEGIN card-header -->
        <div class="card-header with-btn">
          TRAFFIC ANALYTICS
          <div class="card-header-btn">
            <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
            <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                icon="material-symbols-light:fullscreen"></iconify-icon></a>
            <a class="btn" data-toggle="card-remove" href="#"><iconify-icon
                icon="material-symbols-light:close-rounded"></iconify-icon></a>
          </div>
        </div>
        <!-- END card-header -->

        <!-- BEGIN card-body -->
        <div class="card-body p-0">
          <div class="row gx-0">
            <div class="col-lg-8 position-relative">
              <!-- BEGIN map -->
              <div class="" id="world-map" style="height: 344px;"></div>
              <div
                class="position-absolute fs-10px p-15px d-flex align-items-center bottom-0 end-0 start-0 text-white">
                <iconify-icon class="fs-30px me-2 text-white"
                  icon="solar:map-point-rotate-bold-duotone"></iconify-icon>
                <div class="flex-1">
                  Real-time data updates every 5 minutes, providing insights into visitor traffic patterns and
                  peak times. Click on any location for detailed analytics.
                </div>
              </div>
              <!-- END map -->
            </div>
            <div class="col-lg-4">
              <div class="p-3">
                <div class="h4 text-theme fw-100 mb-0">[33,129]</div>
                <p class="fs-10px fw-semibold mb-0 text-white">TOTAL VISITS</p>

                <hr class="my-2">

                <table class="w-100 text-truncate fs-10px">
                  <thead>
                    <tr class="text-white">
                      <th class="w-50">COUNTRY</th>
                      <th class="w-25 text-end">VISITS</th>
                      <th class="w-25 text-end">PCT%</th>
                    </tr>
                  </thead>
                  <tbody class="text-body text-opacity-75">
                    <tr>
                      <td>FRANCE</td>
                      <td class="text-end">13,849</td>
                      <td class="text-end">40.79%</td>
                    </tr>
                    <tr>
                      <td>SPAIN</td>
                      <td class="text-end">3,216</td>
                      <td class="text-end">9.79%</td>
                    </tr>
                    <tr class="text-theme fw-bold bg-white bg-opacity-10">
                      <td>MEXICO</td>
                      <td class="text-end">1,398</td>
                      <td class="text-end">4.26%</td>
                    </tr>
                    <tr>
                      <td>UNITED STATES</td>
                      <td class="text-end">1,090</td>
                      <td class="text-end">3.32%</td>
                    </tr>
                    <tr>
                      <td>BELGIUM</td>
                      <td class="text-end">1,045</td>
                      <td class="text-end">3.18%</td>
                    </tr>
                    <tr>
                      <td>INDIA</td>
                      <td class="text-end">1,033</td>
                      <td class="text-end">3.09%</td>
                    </tr>
                    <tr>
                      <td>BRAZIL</td>
                      <td class="text-end">954</td>
                      <td class="text-end">2.81%</td>
                    </tr>
                    <tr>
                      <td>JAPAN</td>
                      <td class="text-end">911</td>
                      <td class="text-end">3.09%</td>
                    </tr>
                    <tr>
                      <td>ARCANIA</td>
                      <td class="text-end">839</td>
                      <td class="text-end">2.13%</td>
                    </tr>
                  </tbody>
                </table>

                <hr class="my-2">

                <table class="w-100 text-truncate fs-10px">
                  <thead>
                    <tr class="text-white">
                      <th class="w-50">BROWSER</th>
                      <th class="w-25 text-end">NO/m</th>
                      <th class="w-25 text-end">PCT%</th>
                    </tr>
                  </thead>
                  <tbody class="text-body text-opacity-75">
                    <tr>
                      <td>Chrome</td>
                      <td class="text-end">8,000</td>
                      <td class="text-end">40%</td>
                    </tr>
                    <tr>
                      <td>Firefox</td>
                      <td class="text-end">5,000</td>
                      <td class="text-end">25%</td>
                    </tr>
                    <tr class="text-theme fw-600 bg-white bg-opacity-10">
                      <td>Safari</td>
                      <td class="text-end">3,000</td>
                      <td class="text-end">15%</td>
                    </tr>
                    <tr>
                      <td>Edge</td>
                      <td class="text-end">2,000</td>
                      <td class="text-end">10%</td>
                    </tr>
                    <tr>
                      <td>Opera</td>
                      <td class="text-end">1,000</td>
                      <td class="text-end">5%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- END card-body -->
      </div>
      <!-- END card -->
    </div>
    <!-- END col-8 -->

    <!-- BEGIN col-4 -->
    <div class="col-xl-4">
      <!-- BEGIN row -->
      <div class="row gy-2">
        <!-- BEGIN col-12 -->
        <div class="col-lg-12">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header with-btn">
              SECURITY SETTINGS
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
              </div>
            </div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <table class="table-py-1px fs-10px fw-semibold text-white">
                <tbody>
                  {{-- <tr>
                      <td class="pe-3 text-white text-opacity-50">PERMISSION:</td>
                      <td>ADMIN</td>
                    </tr> --}}
                  <tr>
                    <td class="pe-3 text-white text-opacity-50">ENCRYPTION:</td>
                    <td>{{ env('APP_KEY') ? 'ENCRYPTED' : '' }}</td>
                  </tr>
                  <tr>
                    <td class="pe-3 text-white text-opacity-50">APP NAME:</td>
                    <td>{{ env('APP_NAME') }}</td>
                  </tr>
                  <tr>
                    <td class="pe-3 text-white text-opacity-50">MAIL:</td>
                    <td>{{ env('MAIL_FROM_ADDRESS') }}</td>
                  </tr>
                  <tr>
                    <td class="pe-3 text-white text-opacity-50">APP DEBUG:</td>
                    <td>{!! env('APP_DEBUG') ? html_entity_decode("<strong class='text-danger'>True</strong>") : 'False' !!}</td>
                  </tr>
                  <tr>
                    <td class="pe-3 text-white text-opacity-50">ERROR:</td>
                    <td>{!! env('APP_DEBUG') ? html_entity_decode("<strong class='text-danger'>True</strong>") : 'False' !!}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-12 -->

        <!-- BEGIN col-12 -->
        <div class="col-lg-12">
          <!-- BEGIN card -->
          <div class="card h-100">
            <!-- BEGIN card-header -->
            <div class="card-header with-btn">
              TO-DO
              <div class="card-header-btn">
                <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                    icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
              </div>
            </div>
            <!-- END card-header -->

            <!-- BEGIN card-body -->
            <div class="card-body">
              <!-- BEGIN row -->
              <div class="row fs-10px pt-1px mb-3">
                <!-- BEGIN col-4 -->
                <div class="col-4">
                  <div class="d-flex flex-column justify-content-center text-center">
                    <div class="w-40px mx-auto">
                      <div data-render="apexchart" data-type="donut" data-height="40"></div>
                    </div>
                    <div class="mt-2">COMPLETED</div>
                    <div class="text-white">459</div>
                  </div>
                </div>
                <!-- END col-4 -->

                <!-- BEGIN col-4 -->
                <div class="col-4">
                  <div class="d-flex flex-column justify-content-center text-center">
                    <div class="w-40px mx-auto">
                      <div data-render="apexchart" data-type="donut" data-height="40"></div>
                    </div>
                    <div class="mt-2">IN PROGRESS</div>
                    <div class="mt-0 text-white">20</div>
                  </div>
                </div>
                <!-- END col-4 -->

                <!-- BEGIN col-4 -->
                <div class="col-4">
                  <div class="d-flex flex-column justify-content-center text-center">
                    <div class="w-40px mx-auto">
                      <div data-render="apexchart" data-type="donut" data-height="40"></div>
                    </div>
                    <div class="mt-2">CANCELLED</div>
                    <div class="mt-0 text-white">1 min</div>
                  </div>
                </div>
                <!-- END col-4 -->
              </div>
              <!-- END row -->

              <hr class="my-2">

              <table class="w-100 text-truncate fs-10px table-py-1px">
                <thead>
                  <tr class="text-white">
                    <th width="90%">TYPE</th>
                    <th width="10%">TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>COMPLETED</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>IN PROGRESS</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>CANCELLED</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>REJECTED</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>OVERDUE</td>
                    <td>1</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- END card-body -->
          </div>
          <!-- END card -->
        </div>
        <!-- END col-12 -->
      </div>
      <!-- END col-12 -->
    </div>
    <!-- END col-4 -->

    <!-- BEGIN col-4 -->
    <div class="col-xl-4 col-lg-6">
      <!-- BEGIN card -->
      <div class="card h-100">
        <!-- BEGIN card-header -->
        <div class="card-header with-btn">
          BUSINESS METRICS
          <div class="card-header-btn">
            <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
          </div>
        </div>
        <!-- END card-header -->

        <!-- BEGIN card-body -->
        <div class="card-body">
          <!-- BEGIN row -->
          <div class="row g-3">
            <!-- BEGIN col-4 -->
            <div class="col-4">
              <div class="d-flex align-items-center">
                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                    icon="material-symbols-light:bar-chart-4-bars"></iconify-icon></div>
                <div class="flex-1">
                  <div class="fs-10px fw-semibold mb-1 text-white text-opacity-50">VIDEOS</div>
                  <div class="h6 fw-base mb-0">$7.5m</div>
                </div>
              </div>
            </div>
            <!-- END col-4 -->

            <!-- BEGIN col-4 -->
            <div class="col-4">
              <div class="d-flex align-items-center">
                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                    icon="material-symbols-light:group-outline"></iconify-icon></div>
                <div class="flex-1">
                  <div class="fs-10px fw-semibold mb-1 text-white text-opacity-50">VISITORS</div>
                  <div class="h6 fw-base mb-0">45k</div>
                </div>
              </div>
            </div>
            <!-- END col-4 -->

            <!-- BEGIN col-4 -->
            <div class="col-4">
              <div class="d-flex align-items-center">
                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                    icon="material-symbols-light:touch-app-outline"></iconify-icon></div>
                <div class="flex-1">
                  <div class="fs-10px fw-semibold mb-1 text-white text-opacity-50">CLICKS</div>
                  <div class="h6 fw-base mb-0">1.3m</div>
                </div>
              </div>
            </div>
            <!-- END col-4 -->
          </div>
          <!-- END row -->

          <hr class="invisible m-0">
          <hr>

          <div class="row g-3">
            <!-- BEGIN col-4 -->
            <div class="col-4">
              <div class="d-flex align-items-center">
                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                    icon="material-symbols-light:approval-delegation-outline"></iconify-icon></div>
                <div class="flex-1">
                  <div class="fs-10px fw-semibold mb-1 text-white text-opacity-50">PROFIT</div>
                  <div class="h6 fw-base mb-0">$3.2m</div>
                </div>
              </div>
            </div>
            <!-- END col-4 -->

            <!-- BEGIN col-4 -->
            <div class="col-4">
              <div class="d-flex align-items-center">
                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                    icon="material-symbols-light:app-badging-outline"></iconify-icon></div>
                <div class="flex-1">
                  <div class="fs-10px fw-semibold mb-1 text-white text-opacity-50">LAUNCHES</div>
                  <div class="h6 fw-base mb-0">4</div>
                </div>
              </div>
            </div>
            <!-- END col-4 -->

            <!-- BEGIN col-4 -->
            <div class="col-4">
              <div class="d-flex align-items-center">
                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                    icon="material-symbols-light:store-outline"></iconify-icon></div>
                <div class="flex-1">
                  <div class="fs-10px fw-semibold mb-1 text-white text-opacity-50">DOWNLOADS</div>
                  <div class="h6 fw-base mb-0">$8.9m</div>
                </div>
              </div>
            </div>
            <!-- END col-4 -->
          </div>
        </div>
      </div>
      <!-- END card -->
    </div>
    <!-- END col-4 -->

    <!-- BEGIN col-4 -->
    <div class="col-xl-4 col-lg-6">
      <!-- BEGIN card -->
      <div class="card h-100">
        <!-- BEGIN card-header -->
        <div class="card-header with-btn">
          MONTHLY PERFORMANCE
          <div class="card-header-btn">
            <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
          </div>
        </div>
        <!-- END card-header -->

        <!-- BEGIN card-body -->
        <div class="card-body fs-10px fw-semibold text-white">
          <div class="d-flex align-items-center mb-1">
            <span
              class="w-15px h-15px d-flex align-items-center bg-theme justify-content-center text-black">1</span>
            <span class="flex-1 ps-2">JANUARY</span>
            <span class="w-110px">
              <div class="progress h-3px mt-1px bg-black">
                <div class="progress-bar bg-theme" style="width: 75%"></div>
              </div>
            </span>
            <span class="w-50px text-end">1K</span>
          </div>
          <div class="d-flex align-items-center mb-1">
            <span
              class="w-15px h-15px d-flex align-items-center bg-theme justify-content-center bg-opacity-75 text-black">2</span>
            <span class="flex-1 ps-2">FEBRUARY</span>
            <span class="w-110px">
              <div class="progress h-3px mt-1px bg-black">
                <div class="progress-bar bg-theme bg-opacity-75" style="width: 85%"></div>
              </div>
            </span>
            <span class="w-50px text-end">1k</span>
          </div>
          <div class="d-flex align-items-center mb-1">
            <span
              class="w-15px h-15px d-flex align-items-center bg-theme justify-content-center bg-opacity-50 text-black">3</span>
            <span class="flex-1 ps-2">MARCH</span>
            <span class="w-110px">
              <div class="progress h-3px mt-1px bg-black">
                <div class="progress-bar bg-theme bg-opacity-75" style="width: 60%"></div>
              </div>
            </span>
            <span class="w-50px text-end">1k</span>
          </div>
          <div class="d-flex align-items-center mb-1">
            <span
              class="w-15px h-15px d-flex align-items-center justify-content-center bg-white bg-opacity-25 text-black">4</span>
            <span class="flex-1 ps-2">APRIL</span>
            <span class="w-110px">
              <div class="progress h-3px mt-1px bg-black">
                <div class="progress-bar bg-white bg-opacity-50" style="width: 90%"></div>
              </div>
            </span>
            <span class="w-50px text-end">1k</span>
          </div>
          <div class="d-flex align-items-center mb-0">
            <span
              class="w-15px h-15px d-flex align-items-center justify-content-center bg-white bg-opacity-25 text-black">5</span>
            <span class="flex-1 ps-2">MAY</span>
            <span class="w-110px">
              <div class="progress h-3px mt-1px bg-black">
                <div class="progress-bar bg-white bg-opacity-25" style="width: 40%"></div>
              </div>
            </span>
            <span class="w-50px text-end">1k</span>
          </div>
        </div>
        <!-- END card-body -->
      </div>
      <!-- END card -->
    </div>
    <!-- END col-4 -->

    <!-- BEGIN col-4 -->
    <div class="col-xl-4">
      <!-- BEGIN card -->
      <div class="card h-100">
        <!-- BEGIN card-header -->
        <div class="card-header with-btn">
          WEEKLY VISITORS TARGET
          <div class="card-header-btn">
            <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
          </div>
        </div>
        <!-- END card-header -->

        <!-- BEGIN card-body -->
        <div class="card-body">
          <div class="d-flex fs-10px">
            <div class="fs-40px text-theme">
              <iconify-icon icon="material-symbols-light:precision-manufacturing-outline-sharp"></iconify-icon>
            </div>
            <div class="flex-1 ps-3">
              <div>
                Increased weekly production rate by <span class="text-success fw-semibold">5%</span>,
                reflecting improved operational performance.
              </div>
              <hr class="invisible m-0">
              <hr>
              <div class="row mb-4px text-truncate">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div class="text-body w-70px text-opacity-50">CURRENT:</div>
                    <div class="fw-semibold flex-1 text-white">1,000 USERS</div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="text-body w-70px text-opacity-50">TARGET:</div>
                    <div class="fw-semibold flex-1 text-white">1,200 USERS</div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div class="text-body w-50px text-opacity-50">DUE:</div>
                    <div class="fw-semibold flex-1 text-white">200 USERS/W</div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="text-body w-50px text-opacity-50">PREV:</div>
                    <div class="fw-semibold flex-1 text-white">190 USERS</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END card-body -->
      </div>
      <!-- END card -->
    </div>
    <!-- END col-4 -->

    <!-- BEGIN col-4 -->
    <div class="col-xl-4 col-lg-6">
      <!-- BEGIN card -->
      <div class="card h-100">
        <!-- BEGIN card-header -->
        <div class="card-header with-btn">
          CLICKS BY SOCIAL SOURCE
          <div class="card-header-btn">
            <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
          </div>
        </div>
        <!-- END card-header -->

        <!-- BEGIN card-body -->
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <div class="flex-1">
              <!-- BEGIN sales -->
              <div class="h4 fw-300 text-theme mb-0 flex-1">
                70,563.43
              </div>
              <!-- END sales -->
              <!-- BEGIN percentage -->
              <div class="fs-10px fw-semibold text-white text-opacity-50"><span
                  class="text-white">+45.76%</span> vs yesterday</div>
              <!-- END percentage -->
            </div>
          </div>

          <hr>

          <!-- BEGIN widget-list-item -->
          <div class="d-flex align-items-center mb-2 text-white">
            <div
              class="w-20px h-20px fs-12px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <i class="fab fa-apple"></i>
            </div>
            <div class="fs-10px flex-1 px-3">APPLE STORE</div>
            <div class="fw-semibold small text-white">
              <span data-animation="number" data-value="34,840.17">34,840.17</span>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2 text-white">
            <div
              class="w-20px h-20px fs-12px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <i class="fab fa-facebook-f"></i>
            </div>
            <div class="fs-10px flex-1 px-3">FACEBOOK</div>
            <div class="fw-semibold small text-white">
              <span data-animation="number" data-value="12,502.67">12,502.67</span>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2 text-white">
            <div
              class="w-20px h-20px fs-12px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="fs-10px flex-1 px-3">INSTAGRAM</div>
            <div class="fw-semibold small text-white">
              <span data-animation="number" data-value="8,569.75">8,569.75</span>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2 text-white">
            <div
              class="w-20px h-20px fs-12px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="fs-10px flex-1 px-3">YOUTUBE</div>
            <div class="fw-semibold small text-white">
              <span data-animation="number" data-value="6,021.79">6,021.79</span>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2 text-white">
            <div
              class="w-20px h-20px fs-12px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="fs-10px flex-1 px-3">TWITTER</div>
            <div class="fw-semibold small text-white">
              <span data-animation="number" data-value="4,799.20">4,799.20</span>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2 text-white">
            <div
              class="w-20px h-20px fs-12px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <i class="fab fa-google"></i>
            </div>
            <div class="fs-10px flex-1 px-3">GOOGLE</div>
            <div class="fw-semibold small text-white">
              <span data-animation="number" data-value="3,405.85">3,405.85</span>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2 text-white">
            <div
              class="w-20px h-20px fs-12px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <i class="fab fa-tiktok"></i>
            </div>
            <div class="fs-10px flex-1 px-3">TIKTOK</div>
            <div class="fw-semibold small text-white">
              <span data-animation="number" data-value="424.00">424.00</span>
            </div>
          </div>
        </div>
        <!-- END card-body -->
      </div>
      <!-- END card -->
    </div>
    <!-- END col-4 -->

    <!-- BEGIN col-4 -->
    <div class="col-xl-4 col-lg-6">
      <!-- BEGIN card -->
      <div class="card">
        <!-- BEGIN card-header -->
        <div class="card-header with-btn">
          VIDEO IMPRESSIONS
          <div class="card-header-btn">
            <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
          </div>
        </div>
        <!-- END card-header -->

        <!-- BEGIN card-body -->
        <div class="card-body video-impression overflow-y-auto" style="height: 260px !important;">
          <!-- BEGIN product -->
          <div class="d-flex align-items-center fs-10px mb-3">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:video-library"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">APPLE IPHONE 15 PRO MAX</div>
              <div class="text-white text-opacity-50">$1,099.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="210">210</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <div class="d-flex align-items-center fs-10px mb-3">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:video-library"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">APPLE IPHONE 15 PRO MAX</div>
              <div class="text-white text-opacity-50">$1,099.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="210">210</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <div class="d-flex align-items-center fs-10px mb-3">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:video-library"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">APPLE IPHONE 15 PRO MAX</div>
              <div class="text-white text-opacity-50">$1,099.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="210">210</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <!-- END product -->

          <!-- BEGIN product -->
          <div class="d-flex align-items-center fs-10px mb-3">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:camera-outline"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">SONY A7 IV CAMERA</div>
              <div class="text-white text-opacity-50">$2,499.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="198">198</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <!-- END product -->

          <!-- BEGIN product -->
          <div class="d-flex align-items-center fs-10px mb-3">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:laptop-mac-outline-sharp"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">APPLE MACBOOK PRO (M2, 2024)</div>
              <div class="text-white text-opacity-50">$2,499.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="162">162</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <!-- END product -->

          <!-- BEGIN product -->
          <div class="d-flex align-items-center fs-10px mb-3">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:watch-screentime-outline"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">APPLE WATCH ULTRA 2</div>
              <div class="text-white text-opacity-50">$799.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="130">130</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <!-- END product -->

          <!-- BEGIN product -->
          <div class="d-flex align-items-center fs-10px mb-3">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:sports-esports-outline-sharp"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">MICROSOFT XBOX SERIES X</div>
              <div class="text-white text-opacity-50">$499.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="120">120</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <!-- END product -->

          <!-- BEGIN product -->
          <div class="d-flex align-items-center fs-10px">
            <div
              class="fs-20px w-30px h-30px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white">
              <iconify-icon icon="material-symbols-light:speaker-outline-sharp"></iconify-icon>
            </div>
            <div class="text-truncate flex-1 ps-3">
              <div class="fw-semibold text-white">JBL FLIP 6 SPEAKER</div>
              <div class="text-white text-opacity-50">$129.00</div>
            </div>
            <div class="text-center">
              <div class="fw-semibold fs-12px text-white"><span data-animation="number"
                  data-value="110">110</span></div>
              <div class="fs-7px fw-semibold mb-1 text-white text-opacity-50">SOLD</div>
            </div>
          </div>
          <!-- END product -->
        </div>
        <!-- END card-body -->
      </div>
      <!-- END card -->
    </div>
    <!-- END col-4 -->

    <!-- BEGIN col-4 -->
    <div class="col-xl-4">
      <!-- BEGIN card -->
      <div class="card h-100">
        <!-- BEGIN card-header -->
        <div class="card-header with-btn">
          MARKETING CAMPAIGN
          <div class="card-header-btn">
            <a class="btn" data-toggle="card-collapse" href="#"><iconify-icon
                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
            <a class="btn" data-toggle="card-expand" href="#"><iconify-icon
                icon="material-symbols-light:fullscreen"></iconify-icon></a>
            <a class="btn" data-toggle="card-remove" href="#"><iconify-icon
                icon="material-symbols-light:close-rounded"></iconify-icon></a>
          </div>
        </div>
        <!-- END card-header -->

        <!-- BEGIN card-body -->
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="fw-semibold fs-10px mb-2 text-white text-opacity-50">CONVERSION RATE</div>
              <div class="h4 text-theme mb-2">12%</div>
              <div class="fs-10px">
                <span class="fw-semibold text-white">294k</span> total clicks<br>
                <span class="fw-semibold text-white">23%</span> click-through rate
              </div>
            </div>
            <div class="col-6">
              <div class="fw-semibold fs-10px mb-2 text-white text-opacity-50">USER REACHED</div>
              <div class="h4 text-theme mb-2">7.58m</div>
              <div class="fs-10px">
                <span class="fw-semibold text-white">23%</span> bounce rate <br>
                <span class="fw-semibold text-white">85%</span> engagement rate
              </div>
            </div>
          </div>
          <hr>
          <div class="d-flex align-items-center">
            <div class="w-60px">
              <div
                class="h-60px h-60px d-flex align-items-center justify-content-center fs-36px bg-white bg-opacity-10 text-white">
                <iconify-icon icon="material-symbols-light:ads-click"></iconify-icon>
              </div>
            </div>
            <div class="fs-10px text-truncate flex-1 ps-3 text-white">
              <div class="fw-semibold">PAID SEARCH ADS</div>
              <div class="text-white text-opacity-50">MON 26/6 - SUN 2/7</div>
              <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <div class="progress h-4px bg-white bg-opacity-10">
                    <div class="progress-bar progress-bar-striped bg-theme" data-animation="width"
                      data-value="68%" style="width: 68%"></div>
                  </div>
                </div>
                <div class="w-30px ms-2 text-center"><span data-animation="number" data-value="68">68</span>%
                </div>
              </div>
              <div class="text-truncate text-white text-opacity-50">
                47.8% people made a purchase after clicking the ad
              </div>
            </div>
          </div>
          <hr>
          <div class="d-flex align-items-center">
            <div class="w-60px">
              <div
                class="h-60px h-60px d-flex align-items-center justify-content-center fs-36px bg-white bg-opacity-10 text-white">
                <iconify-icon icon="material-symbols-light:video-camera-front-outline-sharp"></iconify-icon>
              </div>
            </div>
            <div class="fs-10px text-truncate flex-1 ps-3 text-white">
              <div class="fw-semibold">VIDEO AD CAMPAIGN</div>
              <div class="text-white text-opacity-50">MON 17/7 - SUN 23/7</div>
              <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <div class="progress h-4px bg-white bg-opacity-10">
                    <div class="progress-bar progress-bar-striped bg-theme" data-animation="width"
                      data-value="85%" style="width: 85%"></div>
                  </div>
                </div>
                <div class="w-30px ms-2 text-center"><span data-animation="number" data-value="85">85</span>%
                </div>
              </div>
              <div class="text-truncate text-white text-opacity-50">
                54.6% viewers watched till the end
              </div>
            </div>
          </div>
        </div>
        <!-- END card-body -->
      </div>
      <!-- END card -->
    </div>
    <!-- END col-4 -->
  </div>
  <!-- END row -->

  <!-- END #content -->
@endsection
