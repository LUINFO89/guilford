<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $nombre_estudiante
 * @property $id_asignatura_estudiante
 * @property $id_curso_estudiante
 * @property $id_identidad_alumno
 * @property $id_profesor
 * @property $email_estudiante
 * @property $nota1
 * @property $nota2
 * @property $nota3
 * @property $nota4
 * @property $nota_final
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Asignatura $asignatura
 * @property Grado $grado
 * @property Profesore $profesore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'nombre_estudiante' => 'required',
		'id_identidad_alumno' => 'required',
		'email_estudiante' => 'required',
		'nota1' => 'required',
		'nota2' => 'required',
		'nota3' => 'required',
		'nota4' => 'required',
		'nota_final' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_estudiante','id_asignatura_estudiante','id_curso_estudiante','id_identidad_alumno','id_profesor','email_estudiante','nota1','nota2','nota3','nota4','nota_final','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'id', 'id_identidad_alumno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function asignatura()
    {
        return $this->hasOne('App\Models\Asignatura', 'id', 'id_asignatura_estudiante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Models\Grado', 'id', 'id_curso_estudiante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesore()
    {
        return $this->hasOne('App\Models\Profesore', 'id', 'id_profesor');
    }
    

}
