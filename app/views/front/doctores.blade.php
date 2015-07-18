@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">
	<section class="doctores">
		<h1 class="titulo-doctores">Allow professionals handle your health</h1>
		<div class="doctor-color doctor1">
			<figure>
				<img src="img/HSB_14 2.jpg" alt="">
			</figure>
			<figure>
				<h2>Dr. Othón Vázquez Novoa</h2>
				<h3>Laparoscopic Surgeon and Obesity Surgeon. Gastrointestinal Endoscopist</h3>
				<ul>
					<li>- Responsible of the Obesity Surgery Service in
					Santa Bárbara del Rieti Hospital
					Durango, Durango, México
					</li>
					<li>- Responsible of the Obesity Surgery Service in
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Responsible of the Obesity Surgery Service in
					General 450 Hospital 
					State Department of Health
					Durango, Durango, Mexico
					</li>
					<li>- Member of the General Surgery Mexican Association</li>
					<li>- Member of the Endoscopic Surgery Mexican Association</li>
					<li>- Member of the Gastrointestinal Endoscopy Mexican Association</li>
					<li>- Professor of the Gastrointestinal Endoscopy, Advanced Laparoscopic Surgery and Obesity Surgery Course 
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Responsible of the Gastrointestinal Endoscopy Unit
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Obesity Surgery
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Advanced Laparoscopic Surgery
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Obesity Endoscopy and Gastrointestinal Endoscopy
					20th of November Hospital
					Mexico City, State Department of Health
					</li>
					<li>- General Surgery Residency
					Mexican Central Red Cross Hospital
					Mexico City 
					</li>
				</ul>
			</figure>
		</div>
			<div class="doctor-nocolor doctor3">
			<figure>
				<img src="img/doctor-tres.jpg" alt="">
			</figure>
			<figure>
				<h2>Dr. Jorge Arturo Hernández Favela</h2>
				<h3>Laparoscopic Surgeon and Obesity Surgeon. Gastrointestinal Endoscopist</h3>
				<ul>
					<li>- Bariatric Surgeon
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>Gastrointestinal and Laparoscopic Surgery Unit
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Co-Professor of the Gastrointestinal Endoscopy, Advanced Laparoscopic Surgery and Obesity Surgery Course 
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Gastrointestinal Endoscopy Subspecialty
					Santiago Ramon y Cajal General Hospital
					ISSSTE
					</li>
					<li>- Mexican General Surgery Board Certificate</li>
					<li>- Member of the General Surgery Mexican Association</li>
					<li>- Member of the Endoscopic Surgery Mexican Association</li>
					<li>- General Surgery Residency
					Mexico General Hospital
					State Department of Health
					Mexico City
					</li>
				</ul>
			</figure>
		</div>

		<div class="doctor-color doctor2">
			<figure>
				<img src="img/doctor-dos.jpg" alt="">
			</figure>
			<figure>
				<h2>Dr. Fernando Vazquez Reyes</h2>
				<ul>
					<li>- Bariatric Surgery Program Coordinator
					Santa Barbara del Rieti Hospital
					Durango, Durango,México
					</li>
					<li>- Bariatric Surgery, Advanced laparoscopic Surgery and Gastrointestinal Endoscopic Assistant
					Santa Barbara del Rieti Hospital
					Durango, Durango, Mexico
					</li>
					<li>- General Medical Practitioner
					Santa Barbara del Rieti Hospital
					Durango, Durango, Mexico
					</li>
					<li>- Medical Degree
					Monterrey University
					Moterrey, Nuevo Leon, Mexico
					</li>
				</ul>
			</figure>
		</div>

		<div class="doctor-nocolor doctor4">
			<figure>
				<img src="img/paulina.jpg" alt="">
			</figure>
			<figure>
				<h2>Lic. Paulina Rámirez Bonilla</h2>
				<br>
				<ul>
					<li>- Nutritionist
					Universidad España
					Durango, Durango, Mexico
					</li>
					<li>- Specialty in Diabetes
					Anahuac University
					Mexico City
					</li>
					<li>- Medical Consultation in patients with obesity, diabetes, dyslipidemia, metabolic syndrome
					</li>
					<li>- Experience in clinical nutrition and research
					</li>
					<li>- Diabetes Educator Certificate</li>
					<li>- Diabetes Mexican Educators College</li>
					<li>- Medical Consultation in the Endocrinology, obesity and lipids Clinic
					Instituto Nacional de Ciencias Médicas y Nutrición Salvador Zubirán
					Mexico City
					</li>
					<li>- Clinical Nutritionist
					Respiratory Diseases National Institute
					Mexico City
					</li>
					
				</ul>
			</figure>
		</div>

		<div class="doctor-color doctor2">
			<figure>
				<img src="img/paulina.jpg" alt="">
			</figure>
			<figure>
				<h2>Lic. Laurencia Zavala Banda </h2>
				<ul>
					<li>- Psychologist Universidad Iberoamericana, Torreón Coahuila.
					</li>
					<li>- Mastership Gestalt Psychotherapy, Instituto Humanístico Integral, Durango, Dgo. 
					</li>
					<li>- Phsycotherapy with children, adolescents and adults.
					</li>
					<li>- Experience in patients with eating disorders and obesity.
					</li>
					<li>Work in psychological evaluation of candidates for bariatric surgery.</li>
				</ul>
			</figure>
		</div>


		<div class="confianza">
			<figure>
				<img src="img/confianza.jpg" alt="">
			</figure>
			<figure>
				<h2>You can trust us</h2>
				<p>If you have any questions, be sure to ask a proffesional by following the next link.</p>
				<a href="{{ URL::to('contact') }}"><button>Contact</button></a>
			</figure>
		</div>
		
	</section>
</section>

@stop