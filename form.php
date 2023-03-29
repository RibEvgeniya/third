<link rel="stylesheet" href="style.css" type="text/css"/>
<div class = "body">
<form action="" method="POST">
  <div class = "main">
 <div class = "name" ><label>Введите Ваше ФИО</label>
  <input name="fio" required /></div>
  <div class = "email"><label>Введите вашу электронную почту</label>
  <input name="email" type="email" placeholder="test@mail.ru" required pattern="*@*"/></div>
  <div class = "year"><label>Введите год рождения</label>
  <select name="year">
    <option value="1922">1922 год</option><option value="1923">1923 год</option><option value="1924">1924 год</option><option value="1925">1925 год</option><option value="1926">1926 год</option><option value="1927">1927 год</option><option value="1928">1928 год</option><option value="1929">1929 год</option><option value="1930">1930 год</option><option value="1931">1931 год</option><option value="1932">1932 год</option><option value="1933">1933 год</option><option value="1934">1934 год</option><option value="1935">1935 год</option><option value="1936">1936 год</option><option value="1937">1937 год</option><option value="1938">1938 год</option><option value="1939">1939 год</option><option value="1940">1940 год</option><option value="1941">1941 год</option><option value="1942">1942 год</option><option value="1943">1943 год</option><option value="1944">1944 год</option><option value="1945">1945 год</option><option value="1946">1946 год</option><option value="1947">1947 год</option><option value="1948">1948 год</option><option value="1949">1949 год</option><option value="1950">1950 год</option><option value="1951">1951 год</option><option value="1952">1952 год</option><option value="1953">1953 год</option><option value="1954">1954 год</option><option value="1955">1955 год</option><option value="1956">1956 год</option><option value="1957">1957 год</option><option value="1958">1958 год</option><option value="1959">1959 год</option><option value="1960">1960 год</option><option value="1961">1961 год</option><option value="1962">1962 год</option><option value="1963">1963 год</option><option value="1964">1964 год</option><option value="1965">1965 год</option><option value="1966">1966 год</option><option value="1967">1967 год</option><option value="1968">1968 год</option><option value="1969">1969 год</option><option value="1970">1970 год</option><option value="1971">1971 год</option><option value="1972">1972 год</option><option value="1973">1973 год</option><option value="1974">1974 год</option><option value="1975">1975 год</option><option value="1976">1976 год</option><option value="1977">1977 год</option><option value="1978">1978 год</option><option value="1979">1979 год</option><option value="1980">1980 год</option><option value="1981">1981 год</option><option value="1982">1982 год</option><option value="1983">1983 год</option><option value="1984">1984 год</option><option value="1985">1985 год</option><option value="1986">1986 год</option><option value="1987">1987 год</option><option value="1988">1988 год</option><option value="1989">1989 год</option><option value="1990">1990 год</option><option value="1991">1991 год</option><option value="1992">1992 год</option><option value="1993">1993 год</option><option value="1994">1994 год</option><option value="1995">1995 год</option><option value="1996">1996 год</option><option value="1997">1997 год</option><option value="1998">1998 год</option><option value="1999">1999 год</option><option value="2000">2000 год</option><option value="2001">2001 год</option><option value="2002">2002 год</option><option value="2003">2003 год</option><option value="2004">2004 год</option><option value="2005">2005 год</option><option value="2006">2006 год</option><option value="2007">2007 год</option><option value="2008">2008 год</option><option value="2009">2009 год</option><option value="2010">2010 год</option><option value="2011">2011 год</option><option value="2012">2012 год</option><option value="2013">2013 год</option><option value="2014">2014 год</option><option value="2015">2015 год</option><option value="2016">2016 год</option><option value="2017">2017 год</option><option value="2018">2018 год</option><option value="2019">2019 год</option><option value="2020">2020 год</option><option value="2021">2021 год</option><option value="2022">2022 год</option>  </select></div>
  <div class = "gender"><label>Укажите ваш пол:</label>
  <label>Мужской</label><input type="radio" checked="checked" name="r1" value="0" />
  <label>Женский</label><input type="radio" name="r1" value="1" />
  <label>Другой</label><input type="radio"  name="r1" value="2" />

  </div>
  
  <div class = "limbs"><label>Выберите ваше число конечностей</label>
  <br><label>4</label>
  <input type="radio" checked="checked" name="r2" value="1" />
  <br><label>6</label>
  <input type="radio" name="r2" value="3" />   
  <br><label>8</label>       
  <input type="radio" name="r2" value="4" /> 
  <br><label>10</label>
  <input type="radio" name="r2" value="5" />  
  <br><label>более</label>
  <input type="radio" name="r2" value="6" />  
  </div>

  <div class = "ability"><label>Выберите вашу способность</label>
<br>
  <select name="abilities" multiple="multiple">
    <option select="selected" value="immrotality">Полет</option>
    <option value="noclipping">Невидимость</option>
    <option value="levitation">Неуязвимость</option>
  </select>
  </div>

  <div class = "biography"><label> Введите свою биографию</label>
<br>
        <textarea name="biography"></textarea>
  </div>

  <p>
    <input type="checkbox" name="cb" required /> С контрактом ознакомлен(а)
 </p>
  <input type="submit" value="отправить" />
  </div>
</form>



  </div>
