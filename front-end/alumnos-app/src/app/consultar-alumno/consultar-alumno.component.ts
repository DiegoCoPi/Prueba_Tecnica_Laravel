import { Component } from '@angular/core';
import { AlumnoService } from '../alumno.service';

@Component({
  selector: 'app-consultar-alumno',
  templateUrl: './consultar-alumno.component.html',
})
export class ConsultarAlumnoComponent {
  grado: string = '';
  alumnos: any[] = [];

  constructor(private alumnoService: AlumnoService) {}

  consultar() {
    this.alumnoService.consultarAlumnosPorGrado(this.grado).subscribe(data => {
      this.alumnos = data;
    });
  }
}

