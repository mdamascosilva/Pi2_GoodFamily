$img_perfil = null;

        if ($request->has('perfil')) {
            $request->validate([
                'perfil' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time().'.'.$request->file('perfil')->extension();
            $request->file('perfil')->move(public_path('storage'), $imageName);
            $img_perfil = "/storage/".$imageName;
        }