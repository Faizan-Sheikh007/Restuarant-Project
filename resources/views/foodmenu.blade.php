
    <!-- ***** Menu Area Starts ***** -->
    <style>
        input[type="number"] {
            width: 80px;
            padding: 5px;
            border: 1px solid #FFC9B6;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background: linear-gradient(to right, #f2709c, #ff9472);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to right, #f46b45, #eea849);
            color: white;
        }
        </style>
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

@foreach($data as $data)
<form action="{{url('/addcart',$data->id)}}" method="post">
@csrf
                    <div class="item">
                        <div  style="background-image:url('/foodimage/{{$data->image}}')" class='card'>
                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                           
                            </div>
                        </div>
<input type="number" name="quantity" min="1" style="width: 80px;">
        <input type="submit" value="Add to Cart">
</form>
                    </div>
             
        @endforeach
    </section>

    <!-- ***** Menu Area Ends ***** -->
