<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatePasswordRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use App\User;
class ChangePasswordController extends Controller
{
    public function passwordResetProcess(UpdatePasswordRequest $request){
        return $this->updatePasswordRow($request)->count() > 0 ? $this->resetPassword($request) : $this->tokenNotFoundError();
      }
      private function updatePasswordRow($request){
         return DB::table('recover_password')->where([
             'email' => $request->email,
             'token' => $request->passwordToken
         ]);
      }
      private function tokenNotFoundError() {
          return response()->json([
            'error' => 'Su correo electrónico o token es incorrecto.'
          ],Response::HTTP_UNPROCESSABLE_ENTITY);
      }
      private function resetPassword($request) {
          $userData = User::whereEmail($request->email)->first();
          $userData->update([
            'password'=>bcrypt($request->password)
          ]);
          $this->updatePasswordRow($request)->delete();
          return response()->json([
            'data'=>'Se ha actualizado la contraseña.'
          ],Response::HTTP_CREATED);
      }    
  }
