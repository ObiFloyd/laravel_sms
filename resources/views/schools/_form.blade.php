@csrf

<div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" name="name" value="{{ old('name', $school->name ?? '') }}" class="form-control @error('name') is-invalid @enderror">
  @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Code</label>
  <input type="text" name="code" value="{{ old('code', $school->code ?? '') }}" class="form-control @error('code') is-invalid @enderror">
  @error('code') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" name="email" value="{{ old('email', $school->email ?? '') }}" class="form-control @error('email') is-invalid @enderror">
  @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Phone</label>
  <input type="text" name="phone" value="{{ old('phone', $school->phone ?? '') }}" class="form-control @error('phone') is-invalid @enderror">
  @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Address</label>
  <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $school->address ?? '') }}</textarea>
  @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active"
    {{ old('is_active', $school->is_active ?? true) ? 'checked' : '' }}>
  <label class="form-check-label" for="is_active">Active</label>
</div>

<button type="submit" class="btn btn-primary">Save</button>
<a href="{{ route('schools.index') }}" class="btn btn-secondary">Cancel</a>
