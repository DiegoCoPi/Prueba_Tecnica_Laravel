import { Component } from '@angular/core';
import { AlumnoService } from '../alumno.service';

@Component({
  selector: 'app-crear-alumno',
  templateUrl: './crear-alumno.component.html',
})
export class CrearAlumnoComponent {
  alumno = {
    nombre: '',
    fecha_nacimiento: '',
    nombre_padre: '',
    nombre_madre: '',
    grado: '',
    seccion: '',
    fecha_ingreso: ''
  };

  constructor(private alumnoService: AlumnoService) {}

  onSubmit() {
    this.alumnoService.crearAlumno(this.alumno).subscribe(response => {
      console.log('Alumno creado:', response);
    });
  }
}
