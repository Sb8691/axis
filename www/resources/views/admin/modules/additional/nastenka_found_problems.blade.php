<table class="table" id="nastenka-problems-table">
    <thead>
      <tr>
        <th class="text-center">Závažnosť</th>
        <th class="text-center">Popis problému</th>
        <th class="text-center">Typ modulu</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $pagination_limit = 6;
    ?>

    @include('admin.modules.additional.found_problems_modules.text_module')
    @include('admin.modules.additional.found_problems_modules.cta_module')
    @include('admin.modules.additional.found_problems_modules.image_module')
    @include('admin.modules.additional.found_problems_modules.slider_module')
    @include('admin.modules.additional.found_problems_modules.slides_module')
    @include('admin.modules.additional.found_problems_modules.gallery_module')

    </tbody>
  </table>
