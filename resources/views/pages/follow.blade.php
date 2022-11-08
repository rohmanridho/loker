@extends ('layouts.app')

@section('title', 'Following')

@section('content')
<section class="page-save mt-2 mt-md-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <div class="line-bottom mb-3">
          <a href="{{ route('save') }}" class="save">Save</a>
          <a href="{{ route('follow') }}" class="follow active">Follow</a>
        </div>

        <div class="row follow-section">
          <div class="col-12 table-responsive">
            <table class="table table-borderless">
              <tr>
                <td class="image">
                  <img src="http://placeimg.com/150/150/people" alt="" class="rounded-circle">
                </td>
                <td class="description">
                  <div class="company-name">Gojek - Jakarta</div>
                  <div class="industries">Technology</div>
                </td>
                <td class="button">
                  <button class="btn btn-primary btn-block w-100">
                    Remove
                  </button>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection