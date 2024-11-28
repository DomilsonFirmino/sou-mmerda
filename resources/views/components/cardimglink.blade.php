@props(['src','link'])
<div class="col-md">
    <div class="mb-4 box-shadow">
      <div class="overlap">
          <div class="overlapimg">
              <img class="card-img-top img-fluid"  src="{{ $src }}" data-holder-rendered="true">
          </div>
          <a href="{{ $link }}">{{ $slot}}</a>
      </div>
    </div>
</div>
