<div class="container-fluid">
	<div class="row">
		<div class="col-12 ">

			<h1 class="text-center text-info ml-1"><img src="<?php echo $url_sitio. "public/icons/contacto.png"?>" class="mr-2">Contacto: <hr style="background-color: #00BFFF"></h1>

			<div class="row">
				<div class="col-6 mr-5 my-5">
				<form>
			  <div class="form-group">
			    <label>Su Nombre:</label>
			      <input  type="text" name="nombre" placeholder="Nombre" class="form-control name-field" required="required">
			  </div>
			  <div class="form-group">
			    <label>Correo Electronico:</label>
			    <input type="email" name="email" placeholder="Email" class="form-control name-field" required="required">
			  </div>
			   <div class="form-group" >
			    <label>Mensaje que desea enviar:</label>
			      <textarea name="mensaje" id="message" placeholder="Mensaje" class="form-control" rows="8" required="required"></textarea>
			  </div>
			</form>
				<p class="text-danger">(Nunca compartimos tus datos con otras personas)
					<button type="submit" class="btn btn-outline-success btn-lg ml-4 text-dark font-weight-bold">Enviar</button>
					<button type="submit" class="btn btn-outline-warning btn-lg ml-3 text-dark font-weight-bold my-1">Cancelar</button>
				</p>
			</div>
			<div class="col-5 my-5">
				<h4 class="text-primary">Nuestras redes sociales:</h4>
				<p><a href="https://api.whatsapp.com/send?phone=5049570-4017"><img src="<?php echo $url_sitio. "public/icons/whatsapp.png";?>" width="18.5" height"18.5" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #000000">9570-4017</small></a></p>
		          <p><img src="<?php echo $url_sitio. "public/icons/telefono.png";?>" width="16" height"16" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #oooooo">Telef: 2662-22-19</small></p>
		          <p><img src="<?php echo $url_sitio. "public/icons/gmail.png";?>" width="16" height"16" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #oooooo">panitab@hotmail.es</small></p>
		          <p><img src="<?php echo $url_sitio. "public/icons/gmail.png";?>" width="16" height"16" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #oooooo">panitabora86@gmail.com</small></p>
					<h2 class="text-success"><img src="<?php echo $url_sitio. "public/icons/hora.png"?>" class="mr-1">Te atenderemos en horarios de:</h2>
					<h5 class="font-weight-lighter">
					<p>-Lunes: 8:00 am - 5:00 pm</p>
					<p>-Martes: 8:00 am - 5:00 pm </p>
					<p>-Miercoles: 8:00 am - 5:00pm </p>
					<p>-Jueves: 8:00 am - 5:00 pm </p>
					<p>-Viernes: 8:00 am - 5:00 pm </p>
					<p>-Sabado: 8:00 am - 5:00 pm </p>
					</h5>	
			</div>

			</div>
		</div>
	</div>
</div>