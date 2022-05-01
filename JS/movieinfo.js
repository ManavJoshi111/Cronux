let got = localStorage.getItem("moviename");
console.log(got);
let url = `https://api.themoviedb.org/3/search/movie?api_key=f251c7bdac148d6e15351fa8fa6d66be&language=en-US&query=${got}&page=1&include_adult=false`;
function getmovies(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      console.log("Works");
      showmovies(data);
    });
}
getmovies(url);
function showmovies(data) {
  console.log(typeof data);
  console.log(data.results[0].title);
  console.log(data.results[0]);
  console.log(got);
  document.getElementById("showtitle").innerHTML = data.results[0].title;
  document.getElementById("title").innerHTML = data.results[0].title;
  document.getElementById("date").innerHTML = data.results[0].release_date;
  document.getElementById("language").innerHTML =
    data.results[0].original_language;
  document.getElementById("adult").innerHTML = data.results[0].adult;
  document.getElementById("rating").innerHTML = data.results[0].vote_average;
  document.getElementById("overview").innerHTML = data.results[0].overview;

  // document.getElementById("poster").innerHTML = `<img src="${
  //   IMG_URL + poster_path
  // }" alt="Poster" class="movieimage">;`;
  // https://image.tmdb.org/t/p/w500/8u8JJDTh5GWnKci3lciXZuyUgPQ.jpg
  document.getElementById("poster").src = "https://image.tmdb.org/t/p/w500"+data.results[0].poster_path;
}
