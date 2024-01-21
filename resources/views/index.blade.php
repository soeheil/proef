<form method="post" action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?')">
    @csrf
    @method('delete')
    <button type="submit">Verwijder Gebruiker</button>
</form>
