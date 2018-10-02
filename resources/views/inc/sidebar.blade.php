<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand p-2">
          <input type="text" class="form-control border-rounded" id="exampleFormControlInput1" placeholder="buscar">
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Shortcuts</a>
        </li>
        <li>
            <a href="#">Overview</a>
        </li>
        <li>
            <a href="#">Events</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>

    </ul>
</div>

<script>
$(window).resize(function () {
  console.log(window.outerWidth)
      if (window.outerWidth <= 801) {
        $("#wrapper").removeClass("toggled");
      }else{
        $("#wrapper").addClass("toggled");
      }
      });

    $("#menu-toggle").click(function(e) {
        c
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
