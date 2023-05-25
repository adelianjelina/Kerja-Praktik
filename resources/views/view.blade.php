<!-- Form edit surat -->
<form action="{{ route('surat.update', $surat) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="nomor_surat">Nomor Surat:</label>
    <input type="text" name="nomor_surat" id="nomor_surat" value="{{ $surat->nomor_surat }}">

    <label for="pengirim">Pengirim:</label>
    <input type="text" name="pengirim" id="pengirim" value="{{ $surat->pengirim }}">

    <label for="perihal">Perihal:</label>
    <input type="text" name="perihal" id="perihal" value="{{ $surat->perihal }}">

    <label for="kategori_id">Kategori:</label>
    <select name="kategori_id" id="kategori_id">
        @foreach ($kategori as $item)
            <option value="{{ $item->id }}" @if ($item->id === $surat->kategori_id) selected @endif>{{ $item->nama }}</option>
        @endforeach
    </select>

    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" id="tanggal" value="{{ $surat->tanggal }}">

    <label for="keterangan">Keterangan:</label>
    <textarea name="keterangan" id="keterangan">{{ $surat->keterangan }}</textarea>

    <label for="file">File:</label>
    <input type="file" name="file" id="file">

    <button type="submit">Simpan</button>
</form>
