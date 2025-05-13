<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;
use App\Models\Role;
use App\Models\Documento;
use App\Models\Comprovante;

class User extends Model
{
    protected $table = "users";
    protected $fillable = ['nome', 'email', 'senha', 'role_id', 'curso_id'];

    public function aluno()
    {
        return $this->hasOne(Aluno::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function comprovantes()
    {
        return $this->hasMany(Comprovante::class);
    }
}
