<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
{{$data->name}}
    <!-- End plugin js for this page -->
    @include("admin.navbar")
</div>
    <!-- End custom js for this page -->
    @include("admin.adminscript")
  </body>
</html>