@extends('admin.layouts.master')
@section('content')
  <div class="row">
    <div class="col-xl-12">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Menu</h5>
          <small class="text-muted float-end">List of all menu</small>
          <a class="btn btn-primary" href="{{ route('admin.menus.create') }}">Add Menu</a>
        </div>
        <div class="card-body">
          <table class="table-striped table-bordered table" id="menuTable">
            <thead>
              <tr>
                <th>SI</th>
                <th>Menu Name</th>
                <th>Submenu Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Categories</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($menus as $menu)
                @if ($menu->sub_menus->count() > 0)
                  @foreach ($menu->sub_menus as $key => $submenu)
                    <tr>
                      @if ($key === 0)
                        <td rowspan="{{ $menu->sub_menus->count() }}">{{ $loop->parent->iteration }}</td>
                        <td rowspan="{{ $menu->sub_menus->count() }}"
                          onmouseenter="document.getElementById('menu-{{ $menu->id }}').classList.remove('d-none');"
                          onmouseleave="document.getElementById('menu-{{ $menu->id }}').classList.add('d-none');">
                          {{ $menu->name }}
                          <div class="d-none" id="menu-{{ $menu->id }}">
                            <!-- show -->
                            <a href="{{ route('admin.menus.show', $menu->id) }}" style="text-decoration: none;">
                              <iconify-icon icon="ph:eye"></iconify-icon>
                            </a>
                            <!-- edit -->
                            <a href="{{ route('admin.menus.edit', $menu->id) }}" style="text-decoration: none;">
                              <iconify-icon icon="ph:note-pencil-light"></iconify-icon>
                            </a>
                            <!-- delete -->
                            <form style="display:inline;"
                              action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this menu?');">
                              @csrf
                              @method('DELETE')
                              <a href="javascript:void(0);" style="text-decoration: none;"
                                onclick="if(confirm('Are you sure you want to delete this menu?')) this.closest('form').submit();">
                                <iconify-icon icon="ph:trash"></iconify-icon>
                              </a>
                            </form>
                          </div>
                        </td>
                      @endif
                      <td>{{ $submenu->name }}</td>
                      <td>{{ $submenu->slug }}</td>
                      <td>{{ $submenu->description }}</td>
                      <td>
                        @foreach ($submenu->categories as $category)
                          <span class="badge bg-primary rounded-pill">{{ $category->name }}</span>
                        @endforeach
                      </td>
                      <td class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-warning float-start"
                          href="{{ route('admin.submenus.edit', $submenu->id) }}">
                          <iconify-icon class="fs-4" icon="ph:note-pencil-light"></iconify-icon>
                        </a>
                        <form style="display:inline;"
                          action="{{ route('admin.submenus.destroy', $submenu->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this submenu?');">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger float-end" type="submit">
                            <iconify-icon class="fs-4" icon="ph:trash"></iconify-icon>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td colspan="2">{{ $menu->name }}</td>
                    <td>{{ $menu->slug }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>
                      @foreach ($menu->categories as $category)
                        <span class="badge bg-primary rounded-pill">{{ $category->name }}</span>
                      @endforeach
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                      <a class="btn btn-warning float-start" href="{{ route('admin.menus.edit', $menu->id) }}">
                        <iconify-icon class="fs-4" icon="ph:note-pencil-light"></iconify-icon>
                      </a>
                      <form style="display:inline;" action="{{ route('admin.menus.destroy', $menu->id) }}"
                        method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this submenu?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger float-end" type="submit">
                          <iconify-icon class="fs-4" icon="ph:trash"></iconify-icon>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
