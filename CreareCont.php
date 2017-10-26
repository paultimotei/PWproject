<?php
session_start();
?>
	<html>
        <head>
            <meta charset="utf-8">
            <title> Sign In </title>
            <link rel="stylesheet" href="styleCreareCont.css">
        </head>
        <body>
            <div class="title"><h1>Create new account </h1></div>
                <div class="container">
                        <div class="formBox" action="includes/signup.inc.php" method="POST">
                            <form>
                                <p>Username</p>
								<input type="text" name="username" required>
								<p> Password</p>
								<input type="Password" name="pwd" required>
								<p>Re-enter Password</p>
								<input type="Password" name="repwd" required>
								<p>Gendre<br></p>
								<input type="radio" name="gendre">Male<br>
								<input type="radio" name="gendre">Female
								<p>Email address</p>
								<input type="email" name="email" required>
								<p>Date of Birth</p>
								<select name="day">
								<option value="day">Day</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								</select>
								<select name="mounth">
								<option value="mounth">Mounth</option>
								<option value="ianuarie">Ianuarie</option>
								<option value="februarie">Februarie</option>
								<option value="mrtie">Martie</option>
								<option value="aprilie">Aprilie</option>
								<option value="mai">May</option>
								<option value="iunie">Iunie</option>
								<option value="iulie">Iulie</option>
								<option value="august">August</option>
								<option value="septembrie">Septembrie</option>
								<option value="octombrie">Octombrie</option>
								<option value="noiebrie">Noiebrie</option>
								<option value="decembrei">Decembrie</option>
								</select>
								<select name="year">
								<option value="year">Year</option>
								<option value="1950">1950</option>
								<option value="1951">1951</option>
								<option value="1952">1952</option>
								<option value="1953">1953</option>
								<option value="1954">1954</option>
								<option value="1955">1955</option>
								<option value="1956">1956</option>
								<option value="1957">1957</option>
								<option value="1958">1958</option>
								<option value="1959">1959</option>
								<option value="1960">1960</option>
								<option value="1961">1961</option>
								<option value="1962">1962</option>
								<option value="1963">1963</option>
								<option value="1964">1964</option>
								<option value="1965">1965</option>
								<option value="1966">1966</option>
								<option value="1967">1967</option>
								<option value="1968">1968</option>
								<option value="1969">1969</option>
								<option value="1970">1970</option>
								<option value="1971">1971</option>
								<option value="1972">1972</option>
								<option value="1973">1973</option>
								<option value="1974">1974</option>
								<option value="1975">1975</option>
								<option value="1976">1976</option>
								<option value="1977">1977</option>
								<option value="1978">1978</option>
								<option value="1979">1979</option>
								<option value="1980">1980</option>
								<option value="1981">1981</option>
								<option value="1982">1982</option>
								<option value="1983">1983</option>
								<option value="1984">1984</option>
								<option value="1985">1985</option>
								<option value="1986">1986</option>
								<option value="1987">1987</option>
								<option value="1988">1988</option>
								<option value="1989">1989</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								</select>
								<p>City</p>
								<select name="city">
								<option value="city">City</option>
								<option value="alba">Alba</option>
								<option value="arad">Arad</option>
								<option value="arges">Arges</option>
								<option value="bacau">Bacau</option>
								<option value="bihor">Bihor</option>
								<option value="bistrita-nasaud">Bistrita-Nasaud</option>
								<option value="botosani">Botosani</option>
								<option value="brasov">Brasov</option>
								<option value="braila">Braila</option>
								<option value="bucuresti">Bucuresti</option>
								<option value="buzau">Buzau</option>
								<option value="carasi-severin">Caras-Severin</option>
								<option value="calarasi">Calarasi</option>
								<option value="cluj">Cluj</option>
								<option value="constanta">Constanta</option>
								<option value="covasna">Covasna</option>
								<option value="dambovita">Dambovita</option>
								<option value="dolj">Dolj</option>
								<option value="galati">Galati</option>
								<option value="giurgiu">Giurgiu</option>
								<option value="gorj">Gorj</option>
								<option value="harghita">Harghita</option>
								<option value="hunedoara">Hunedoara</option>
								<option value="ialomita">Ialomita</option>
								<option value="iasi">Iasi</option>
								<option value="ilfov">Ilfov</option>
								<option value="maramures">Maramures</option>
								<option value="mehedinti">Mehedinti</option>
								<option value="mures">Mures</option>
								<option value="neamt">Neamt</option>
								<option value="olt">Olt</option>
								<option value="prahova">Prahova</option>
								<option value="satu mare">Satu Mare</option>
								<option value="salaj">Salaj</option>
								<option value="sibiu">Sibiu</option>
								<option value="suceava">Suceava</option>
								<option value="teleorman">Teleorman</option>
								<option value="timis">Timis</option>
								<option value="tulcea">Tulcea</option>
								<option value="vaslui">Vaslui</option>
								<option value="valcea">Valcea</option>
								<option value="vrancea">Vrancea</option>
								</select>
								<p>Address</p>
								<input type="text" name="address" required>
                               <input type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
        </body>
    </html>