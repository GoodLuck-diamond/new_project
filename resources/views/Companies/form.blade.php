

        <div class="mb-3">
            <label for="name" class="form-label">Tashkilot nomi</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $company->name }}">
            <div id="emailHelp" class="form-text">Biz xech qachon, xech kimga Sizning ma'lumotlaringizni oshkor qilmaymiz!
            </div>
        </div>
        <div class="mb-3">
            <label for="adress" class="form-label">Tashkilotning to'liq manzili</label>
            <input type="text" class="form-control" id="adress" name="adress" value="{{ old('adress') ?? $company->adress}}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Tashkilot telefon raqami</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') ?? $company->phone}}">
        </div>
        <button type="submit" class="btn btn-primary">Saqlash</button>
