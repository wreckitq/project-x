{!! form()->text('title')->label('Title') !!}
{!! form()->redactor('description')->label('Description') !!}
{!! form()->number('stock')->label('Stock')->hint('Kosongkan jika jumlahnya unlimited') !!}
{!! form()->input('price', null, 'number')->prependIcon('coins')->label('Poin Needed') !!}
{!! form()->action([
    form()->submit('Simpan'),
    form()->link('Batal', route('modules::reward.index'))
]) !!}
