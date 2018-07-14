<!-- Statistici -->

<h2>Statistici</h2>
<hr class="limitatorLight">

<div class="tab">
  <button class="tablinks active" onclick="openContent(event, 'Zilnic')">Zilnic</button>
  <button class="tablinks" onclick="openContent(event, 'Saptamanal')">Saptamanal</button>
  <button class="tablinks" onclick="openContent(event, 'Lunar')">Lanuar</button>
  <button class="tablinks" onclick="openContent(event, 'Anual')">Anual</button>
</div>
<div id="Zilnic" class="tabcontent" style="display: block;">

  	<div id="info">
			        <p>
			            <strong>Suma totala depusa:</strong>
			            <span>599 RON</span>
			        </p>
			        <p>
			            <strong>Suma totala retrasa:</strong>
			            <span>48 RON</span>
			        </p>
			        <p>
			            <strong>Rata castig:</strong>
			            <span>12.34%</span>
			        </p>
			        <p>
			            <strong>Cea mai mare suma pariata:</strong>
			            <span>5000 RON</span>
			        </p>
			        <p>
			            <strong>Suma maxima depusa:</strong>
			            <span>60 RON</span>
			        </p>
			        <p>
			            <strong>Suma minima depusa:</strong>
			            <span>30 RON</span>
			        </p>
    			</div>
</div>
<div id="Saptamanal" class="tabcontent">

  	<div id="info">
			        <p>
			            <strong>Suma totala depusa:</strong>
			            <span>59965 RON</span>
			        </p>
			        <p>
			            <strong>Suma totala retrasa:</strong>
			            <span>4856 RON</span>
			        </p>
			        <p>
			            <strong>Rata castig:</strong>
			            <span>10.34%</span>
			        </p>
			        <p>
			            <strong>Cea mai mare suma pariata:</strong>
			            <span>4000 RON</span>
			        </p>
			        <p>
			            <strong>Suma maxima depusa:</strong>
			            <span>=500 RON</span>
			        </p>
			        <p>
			            <strong>Suma minima depusa:</strong>
			            <span>30 RON</span>
			        </p>
    			</div>
</div>

<div id="Lunar" class="tabcontent">
  <div id="info">
			        <p>
			            <strong>Suma totala depusa:</strong>
			            <span>599654 RON</span>
			        </p>
			        <p>
			            <strong>Suma totala retrasa:</strong>
			            <span>48564 RON</span>
			        </p>
			        <p>
			            <strong>Rata castig:</strong>
			            <span>12.34%</span>
			        </p>
			        <p>
			            <strong>Cea mai mare suma pariata:</strong>
			            <span>5000 RON</span>
			        </p>
			        <p>
			            <strong>Suma maxima depusa:</strong>
			            <span>6000 RON</span>
			        </p>
			        <p>
			            <strong>Suma minima depusa:</strong>
			            <span>30 RON</span>
			        </p>
    			</div>
</div>
<div id="Anual" class="tabcontent">
  <div id="info">
			        <p>
			            <strong>Suma totala depusa:</strong>
			            <span>59965445 RON</span>
			        </p>
			        <p>
			            <strong>Suma totala retrasa:</strong>
			            <span>4856454 RON</span>
			        </p>
			        <p>
			            <strong>Rata castig:</strong>
			            <span>12.34%</span>
			        </p>
			        <p>
			            <strong>Cea mai mare suma pariata:</strong>
			            <span>50000 RON</span>
			        </p>
			        <p>
			            <strong>Suma maxima depusa:</strong>
			            <span>6000 RON</span>
			        </p>
			        <p>
			            <strong>Suma minima depusa:</strong>
			            <span>30 RON</span>
			        </p>
    			</div>
</div>
<script type="text/javascript">function openContent(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}</script>
