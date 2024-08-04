<x-layout>

        {{dd($artists[1]->signingsworkplease)}}

    <section class="container py-4">
        <h1>Home</h1>

        <section class="container py-4">
            <h2>Hello</h2>
            <p class="linewidth">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, molestiae qui sapiente
                praesentium maiores blanditiis excepturi. Maiores aperiam nesciunt debitis, aspernatur numquam odio,
                corporis saepe id ducimus maxime eveniet. Atque.</p>
        </section>



        <form class="flex gap form">
            <div class="form__item">
                <label for="name">Name</label>
                <input type="text" id="name"></input>
            </div>
            <button class="form__submit">Send</button>
        </form>
    </section>


    <section class="container">

        <div class="dashboard">
            <div class="dashboard__sidebar">
                <nav class="dashboard__nav">
                    <ul>
                        <li><a aria-current="true" href="#">Signing Dates</a></li>
                        <li><a href="#">Artist List</a></li>
                    </ul>
                </nav>
            </div>

            <div class="dashboard__content">

                @foreach($signings as $signing)
                    <span>{{$signing->signing_date}}</span>



                @endforeach

                <div class="dashboard__dategroup">
                    <h3>Sep 15, 2024</h3>

                    <table class="dashboard__table">

                    <thead>
                    <tr>
                        <th scope="col">Artist Name</th>
                        <th scope="col">Notes</th>
                        <th scope="col"></th>
                        <th scope="col">Prices</th>
                    </tr>

                    <tr>
                        <td>Mark Poole</td>
                        <td>Black or gold only</td>
                        <td>View Cards</td>
                        <td>$5/$8</td>
                    </tr>

                    <tr>
                        <td>Drew Tucker</td>
                        <td>Black or gold only</td>
                        <td>View Cards</td>
                        <td>$5/$8</td>
                    </tr>

                    <tr>
                        <td>Steve Argyle</td>
                        <td>Black or gold only</td>
                        <td>View Cards</td>
                        <td>$5/$8</td>
                    </tr>
                    </thead>

                    </table>


                </div>

                <div class="dashboard__dategroup">
                    <h3>Sep 15, 2024</h3>

                    <table class="dashboard__table">

                        <thead>
                        <tr>
                            <th scope="col">Artist Name</th>
                            <th scope="col">Notes</th>
                            <th scope="col"></th>
                            <th scope="col">Prices</th>
                        </tr>

                        <tr>
                            <td>Mark Poole</td>
                            <td>Black or gold only</td>
                            <td>View Cards</td>
                            <td>$5/$8</td>
                        </tr>

                        <tr>
                            <td>Drew Tucker</td>
                            <td>Black or gold only</td>
                            <td>View Cards</td>
                            <td>$5/$8</td>
                        </tr>

                        <tr>
                            <td>Steve Argyle</td>
                            <td>Black or gold only</td>
                            <td>View Cards</td>
                            <td>$5/$8</td>
                        </tr>
                        </thead>

                    </table>


                </div>
            </div>
        </div>

    </section>


</x-layout>
