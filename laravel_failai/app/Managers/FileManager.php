<?php

namespace App\Managers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Exception;

class FileManager
{
    public function saveFile(Request $request, string $field, string $path): File
    {
        // Tikriname, ar užklausa turi failą ir ar jis yra validus paveikslėlio failas
        if ($request->hasFile($field) && $request->file($field)->isValid()) {
            // Įkeliame failą į /tmp/ aplanką
            $image = $request->file($field);

            // Gaunamas paveikslelio pavadinimą
            $clientOriginalName = $image->getClientOriginalName();

            // Atlieka /tml/phpHG948fWRFG paveikslelio perkelima į public/img/products katalogą
            $image->move(public_path($path), $clientOriginalName);
            return File::create([
                'path' => public_path($path) . '/' . $clientOriginalName,
                'url' => '/' . $path . '/' . $clientOriginalName,
                'name' => $clientOriginalName,
                //'size' => $image->getSize(),
                'extension' => $image->getClientOriginalExtension()
            ]);
        }
        throw new Exception();
    }

    public function removeFile($file): void
    {
        $file->delete();
    }
}
