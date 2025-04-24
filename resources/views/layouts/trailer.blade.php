@php
  $trailer = \App\Models\Trailer::whereStatus(true)->latest('updated_at')->first();
@endphp
<center>
  <strong>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
      <h2>
        <font size="5px">{{ $trailer?->trailer_name }} </font>
      </h2>
      <iframe class="w-100" height="315" src="{{ $trailer?->trailer_url }}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </strong>
</center>
<style>
  .alert {
    border-radius: 5px;
    margin-top: 10px;
  }

  .buttontg {
    background-color: #009DE1;
    color: #FFF;
    border-color: #0088cc;
    padding: 8px 3px;
    text-transform: uppercase;
    align-items: center;
    border-radius: 10%;
  }

  strong {
    font-weight: 500;
  }

  .button {
    color: white;
    padding: 8px 6px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 1px;
    -webkit-transition-duration: 0.4s;
    /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
  }

  .button5 {
    background-color: #555555;
    color: white;
    border: 1px solid #e7e7e7;
    border-radius: 10%;
  }

  .button5:hover {
    background-color: #e7e7e7;
    border: 1px solid #555555;
    color: black;
  }

  .buttonred {
    background-color: #f50c0c;
    color: white;
    border: 1px solid #ffffff;
    border-radius: 10%;
    font-size: 16px;
  }

  .buttonred:hover {
    background-color: #555555;
    border: 2px solid #ffffff;
    color: white;
    border-radius: 10%;
    font-size: 16px;
  }

  .alert {
    padding: 5px;
    color: #282828;
    background-color: #2FB986;
    width: 90%;
  }

  .alert a {
    color: #282828;
    text-decoration: none;
  }

  .alert a:hover {
    color: #D35151;
    text-decoration: none;
  }

  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  .closebtn:hover {
    color: black;
  }

  .buttontg {
    background-color: #009DE1;
    color: #FFF;
    border-color: #0088cc;
    padding: 8px 3px;
    text-transform: uppercase;
    align-items: center;
    border-radius: 10%;
  }

  .button4k {
    background-color: #FFAA2C;
    color: black;
    border-color: #EDBA26;
    padding: 8px 3px;
    text-transform: uppercase;
    align-items: center;
    border-radius: 10%;
  }
</style>
<br>
