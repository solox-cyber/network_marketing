<form action="{{ route('assign.contacts') }}" method="POST">
    @csrf
    <label for="sales_rep_id">Select Sales Rep:</label>
    <select name="sales_rep_id" id="sales_rep_id">
        <!-- Display your sales reps as options in the select dropdown -->
        <!-- Example: -->
        <option value="1">Sales Rep 1</option>
        <option value="2">Sales Rep 2</option>
        <!-- ... -->
    </select>

    <table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Email</th>
                <!-- Add other contact details here -->
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>
                    <input type="checkbox" name="contact_ids[]" value="{{ $contact->id }}">
                </td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <!-- Display other contact details here -->
            </tr>
            @endforeach
        </tbody>
    </table>

    <button type="submit">Assign Contacts</button>
</form>
