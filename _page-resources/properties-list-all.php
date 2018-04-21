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
            url: 'assets/json/dummy-property-data.php',
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
          field: 'Title',
          title: 'Title',
          width: '300',
          template: function(data) {
              return '<div class="m-card-user m-card-user--sm">\
                        <div class="m-card-user__pic">\
                                <img src="assets/img/property-avatar1.jpg" class="m--img-rounded m--marginless" alt="photo">\
                            </div>\
                            <div class="m-card-user__details">\
                                <span class="m-card-user__name">' + data.Title + '</span>\
                                <span class="m-card-user__email">' + data.Location + ', ' + data.Region + '</span>\
                            </div>\
                        </div>';
          }
        }, {
          field: 'Featured',
          title: 'Featured',
          width: '100',
          textAlign: 'center',
          template: function(data) {
              return '<span><i class="la la-check m--font-success"></i></span>'
          }
        }, {
          field: 'Owner',
          title: 'Owner'
        }, {
          field: 'Category',
          title: 'Type'
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
                        <a class="dropdown-item" href="property-edit.php"><i class="la la-edit"></i> Edit details</a>\
                        <a class="dropdown-item" href="#"><i class="la la-eye"></i> View on website</a>\
                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Action 3</a>\
                    </div>\
                </div>\
                <a href="property-edit.php" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\
                    <i class="la la-edit"></i>\
                </a>\
            ';
          },
        }],
    });

    $('#m_form_status').on('change', function() {
        datatable.search($(this).val(), 'Status');
    });

    $('#m_form_type').on('change', function() {
        datatable.search($(this).val(), 'Category');
    });

    $('#m_form_status, #m_form_type').selectpicker();

    // custom details row
    // ref: http://keenthemes.com/forums/topic/custom-datatable-row-detailchild/
    function detailRow(e) {
        $('<div/>').attr('id', 'child_data_ajax_' + e.data.RecordID).appendTo(e.detailCell);

        var cellContent = '<table class="ei-datatable-subtable">\
                <tr class="m-datatable__row">\
                    <td class="m-datatable__cell"><span style="width: 70px;">Address:</span></td>\
                    <td data-field="Mobile" class="m-datatable__cell"><span style="width: 350px;">' + e.data.Address + '</span></td>\
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