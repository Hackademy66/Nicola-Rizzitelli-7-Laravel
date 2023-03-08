<x-layout>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <img src="https://www.unicusano.it/blog/wp-content/uploads/2017/11/come-diventare-consulente-aziendale-1280x720.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-12">
                <h2>FIRST CONSULTACY IS FREE</h2>
                <h3>ONE THING IS CERTAIN: WITH US, YOU ARE IN GOOD HANDS.
                </h3>
                <p class="py-5">We offer free and personalized estimates  to all its customers. All estimates are processed by qualified personnel who analyze together with you the characteristics of the system you want to create. Try to provide us with  as much information as possible,  such as your consumption, the floor plans of your home or business, and any other information you deem useful for planning your photovoltaic system .
                    When choosing the type of product to be used, it must be taken into consideration that there are different materials with different qualities: Il Portale del Sole has always selected  high quality materials that ensure more constant and satisfactory returns for its customers.
                    In short, every need has a solution and, with 18 years of experience behind them, our experts accept even the most difficult challenges.
                    Test us! 
                </p>
                <p class="py-2">We employ a team of industry experts who can help you in every step, from purchasing to installing and connecting your solar panels . We will take care of showing you the most suitable product for your situation , exhaustively illustrating all the advantages  that solar energy offers.
                    Whether you ask us for a  quote  for a  home or business photovoltaic system . or for a solar kit for your camper , your cabin , or your boat , or even oneparticular solution just for you, you will always receive a completely personalized proposal tailored to your needs. 
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">
                    Contact us with the form
                </h1>
            </div>
        </div>
    </div>
    <div class="container my5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" method="POST" action="{{route('contact_us_submit')}}">
                    @csrf

                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your message</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Contact-us</button>
                </form> 
            </div>
        </div>
    </div>

</x-layout>