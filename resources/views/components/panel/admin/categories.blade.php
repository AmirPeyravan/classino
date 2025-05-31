<!-- دسته‌بندی‌ها -->
<h2>مدیریت دسته‌بندی‌ها</h2>
<form>
    <h3>افزودن دسته‌بندی</h3>
    <label for="category-name">نام دسته‌بندی</label>
    <input type="text" id="category-name" placeholder="نام دسته‌بندی">
    <button type="submit">افزودن</button>
</form>
<table>
    <thead>
        <tr>
            <th>نام دسته‌بندی</th>
            <th>تعداد کلاس‌ها</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->courses_count }}</td>
                <td>
                    <button class="action-btn">ویرایش</button>
                    <button class="delete-btn">حذف</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">هیچ دسته‌بندی‌ای یافت نشد.</td>
            </tr>
        @endforelse
    </tbody>
</table>
