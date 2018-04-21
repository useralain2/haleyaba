<script>

//== Class definition

var DatatableChildRemoteDataDemo = function() {
  //== Private functions

  // demo initializer
  var demo = function() {

    var datatable = $('.m_datatable').mDatatable({
      // datasource definition
      data: {
        type: 'remote',
        source: {
          read: {
            url: 'assets/json/dummy-customers-data.php',
          },
        },
        pageSize: 10, // display 20 records per page
        serverPaging: true,
        serverFiltering: false,
        serverSorting: true,
      },

      // layout definition
      layout: {
        theme: 'default',
        scroll: false,
        height: null,
        footer: false,
      },

      // column sorting
      sortable: true,

      pagination: true,

      detail: {
        title: 'Load sub table',
        content: detailRow,
      },

      search: {
        input: $('#generalSearch'),
      },

      // columns definition
      columns: [
        {
          field: 'RecordID',
          title: '',
          sortable: false,
          width: 20,
          textAlign: 'center',
        }, {
          width: 200,
          field: 'FirstName',
          title: 'Name',
          template: function(data) {
            return data.FirstName + ' ' + data.LastName;
          },
        }, {
          field: 'Country',
          title: 'Country',
          template: function(data) {
              return 'Italy';
          }
        }, {
          field: 'Town',
          title: 'Town/City'
        }, {
          field: 'Status',
          title: 'Status',
          template: function(data) {
              return '<span><span class="m-badge m-badge--success m-badge--wide">Active</span></span>';
          }
        }, {
          field: 'Actions',
          width: 90,
          title: 'Actions',
          sortable: false,
          overflow: 'visible',
          template: function (row, index, datatable) {
            var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';
            return '\
                <div class="dropdown ' + dropup + '">\
                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">\
                        <i class="la la-ellipsis-h"></i>\
                    </a>\
                    <div class="dropdown-menu dropdown-menu-right">\
                        <a class="dropdown-item" href="user-edit.php"><i class="la la-edit"></i> Edit details</a>\
                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Create offer</a>\
                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> View properties</a>\
                    </div>\
                </div>\
                <a href="user-edit.php" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\
                    <i class="la la-edit"></i>\
                </a>\
            ';
          },
        }],
    });

    $('#m_form_status').on('change', function() {
        datatable.search($(this).val(), 'Status');
    });

    $('#m_form_role').on('change', function() {
        datatable.search($(this).val(), 'Role');
    });

    $('#m_form_status, #m_form_role').selectpicker();

    // custom details row
    // ref: http://keenthemes.com/forums/topic/custom-datatable-row-detailchild/
    function detailRow(e) {
        $('<div/>').attr('id', 'child_data_ajax_' + e.data.RecordID).appendTo(e.detailCell);

        var cellContent = '<table class="ei-datatable-subtable">\
            <tr class="m-datatable__row">\
                <td class="m-datatable__cell"><span style="width: 70px;">Mobile:</span></td>\
                <td data-field="Mobile" class="m-datatable__cell"><span style="width: 350px;"></span></td>\
            </tr>\
            <tr class="m-datatable__row">\
                <td class="m-datatable__cell"><span style="width: 70px;">Phone:</span></td>\
                <td data-field="Phone" class="m-datatable__cell"><span style="width: 350px;">' + e.data.Phone + '</span></td>\
            </tr>\
            <tr class="m-datatable__row">\
                <td class="m-datatable__cell"><span style="width: 70px;">Email:</span></td>\
                <td data-field="Email" class="m-datatable__cell"><span style="width: 350px;"><a href="#" class="m-link">' + e.data.Email + '</a></span></td>\
            </tr>\
            <tr class="m-datatable__row">\
                <td class="m-datatable__cell"><span style="width: 70px;">Notes:</span></td>\
                <td data-field="Notes" class="m-datatable__cell"><span style="width: 350px;">' + e.data.Notes + '</span></td>\
            </tr>\
        </table>';

        $(e.subTable).html(cellContent);
    }

  };

  return {
    //== Public functions
    init: function() {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  DatatableChildRemoteDataDemo.init();
});

</script>