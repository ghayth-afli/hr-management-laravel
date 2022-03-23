import DataTable from 'react-data-table-component';
import React from "react";
import CustomMaterialPagination from './pagination';
class Table extends React.Component{
    render(){


        const columns = [
            {
                name: 'Nom',
                selector: row => row.nom,
                sortable: true,
                
            },
            {
                name: 'Role',
                selector: row => row.role,
                sortable: true,
            },
            {
                name: 'Email',
                selector: row => row.email,
                sortable: true,
            },
            {
                name: 'Créé',
                selector: row => row.cree,
                sortable: true,
            },
            {
                name: 'Statut',
                selector: row => row.statut,
                sortable: true,
            },
            {
                name: 'Actions',
                selector: row => row.action,
                sortable: true,
            },
        ];

            const data = [
                {
                    id: 1,
                    nom: 'Beetlejuice',
                    role: '1988',
                    email: 'mohamed@gmail.com',
                    cree: '1950',
                    statut: 'ddd',
                    action: '',
                },
            ]


    return (
        <div class="app-content content ">
            <DataTable
                columns={columns}
                data={data}
                pagination
                paginationComponent={CustomMaterialPagination}
            />
        </div>
    );
}
}
export default Table;