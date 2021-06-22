                         <!-- This will allow us to output a dynamic value which from the web file we have setup or from the db using the web file to serve and the double braces are for security, it's the same as htmlspecialchars to prevent people from tampering into it-->
 
                        <!-- <p>{{$type}} - {{$base}} - {{$price}}</p> -->
                        <!-- Blade function begins with an @ symbol -->
                        <!-- @if($price > 15)
                            <p>This pizza is expensive</p>
                            @elseif($price < 5)
                            <p>This pizza is cheap</p>
                            @else
                            <p>This pizza is normally priced</p>
                        @endif

                        @unless($base == 'cheesy')
                        <p>You do not have a cheesy</p>
                        @endunless

                        @php 
                        
                        $name = 'dude';
                        echo $name;

                        @endphp -->

                        <!-- @for($i = 0; $i < 5; $i++)
                        
                            <p>The value of i {{$i}}</p>
                        
                        @endfor -->